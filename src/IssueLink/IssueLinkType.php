<?php

namespace JiraRestApi\IssueLink;

use JiraRestApi\ClassSerialize;

/**
 * Class IssueLinkType
 * @package JiraRestApi\Issue
 * @see https://docs.atlassian.com/jira/REST/server/#api/2/issueLinkType-createIssueLinkType
 */
class IssueLinkType implements \JsonSerializable
{
    use ClassSerialize;

    public function jsonSerialize()
    {
        $vars = array_filter(get_object_vars($this));

        return $vars;
    }

    /** @var integer */
    public $id;

    /** @var string */
    public $name;

    /** @var  string */
    public $inward;

    /** @var string */
    public $outward;

    /** @var  string */
    public $self;
}
