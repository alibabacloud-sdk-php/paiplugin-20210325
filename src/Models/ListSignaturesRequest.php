<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models;

use AlibabaCloud\Tea\Model;

class ListSignaturesRequest extends Model
{
    /**
     * @description 签名名称，用于名称过滤或搜索，使用%name%模糊匹配
     *
     * @var string
     */
    public $name;

    /**
     * @description 分页数，从1开始，默认为1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 审核状态过滤
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'name'       => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSignaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
