<?php

// namespace App\Http\Controllers\Api;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

// class TopicsController extends Controller
// {
//     //
// }
namespace App\Http\Controllers\Api;

use App\Models\Topic;           //模型
use Illuminate\Http\Request;    //表单
use App\Transformers\TopicTransformer;  //输出格式
use App\Http\Requests\Api\TopicRequest; //验证格式

class TopicsController extends Controller
{
    public function store(TopicRequest $request, Topic $topic)
    {
        $topic->fill($request->all());
        $topic->user_id = $this->user()->id;
        $topic->save();

        return $this->response->item($topic, new TopicTransformer())
            ->setStatusCode(201);
    }
}