--TEST--
Buddy: Detect properties of PR build

--ENV--
BUDDY_EXECUTION_BRANCH=main
BUDDY_EXECUTION_CHANGELOG=[e5e13f8] Create buddy.yml | mikebenson | 2019-01-01T07:14:58
BUDDY_EXECUTION_CLEAR_CACHE=false
BUDDY_EXECUTION_COMMENT=My first execution
BUDDY_EXECUTION_ID=1
BUDDY_EXECUTION_MODE=MANUAL
BUDDY_EXECUTION_PULL_REQUEST_BASE_BRANCH=main
BUDDY_EXECUTION_PULL_REQUEST_HEAD_BRANCH=feature/pr-branch
BUDDY_EXECUTION_PULL_REQUEST_ID=pull/1
BUDDY_EXECUTION_PULL_REQUEST_NO=1
BUDDY_EXECUTION_REFRESH=false
BUDDY_EXECUTION_REVISION_COMMITTER_EMAIL=mikebenson@buddy.works
BUDDY_EXECUTION_REVISION_COMMITTER_NAME=Mike Benson
BUDDY_EXECUTION_REVISION_MESSAGE=Create buddy.yml
BUDDY_EXECUTION_REVISION_SHORT=e5e13f8
BUDDY_EXECUTION_REVISION_SUBJECT=Create buddy.yml
BUDDY_EXECUTION_REVISION_URL=https://app.buddy.works/myworkspace/my-project/repository/commit/e5e13f8b7f8d5c6096a0501dc09b48eef05fea96
BUDDY_EXECUTION_REVISION=e5e13f8b7f8d5c6096a0501dc09b48eef05fea96
BUDDY_EXECUTION_START_DATE=2019-01-01T11:27:40.140Z
BUDDY_EXECUTION_TAG=v1.0
BUDDY_EXECUTION_URL=https://app.buddy.works/myworkspace/my-project/pipelines/pipeline/1/execution/5d9dc42c422f5a268b389d08
BUDDY_FAILED_ACTION_NAME=Upload files
BUDDY_INVOKER_AVATAR_URL=https://app.buddy.works/image-server/user/0/0/0/0/0/0/1/05d20f3d58ce09a3b4e9g3334a810603/w/32/32/AVATAR.png
BUDDY_INVOKER_EMAIL=mikebenson@buddy.works
BUDDY_INVOKER_ID=1
BUDDY_INVOKER_NAME=Mike Benson
BUDDY_INVOKER_URL=https://app.buddy.works/myworkspace/profile/1
BUDDY_PIPELINE_ID=1
BUDDY_PIPELINE_NAME=Deploy to Production
BUDDY_PIPELINE_REF_NAME=main
BUDDY_PIPELINE_TARGET_SITE_URL=https://buddy.works/
BUDDY_PIPELINE_TRIGGER_MODE=MANUAL
BUDDY_PIPELINE_URL=https://app.buddy.works/myworkspace/my-project/pipelines/pipeline/1
BUDDY_PROJECT_NAME_ID=my-project
BUDDY_PROJECT_NAME=my-project
BUDDY_PROJECT_URL=https://app.buddy.works/myworkspace/my-project
BUDDY_REPO_SLUG=buddyworks/my-project
BUDDY_REPO_SSH_URL=git@github.com:buddyworks/my-project
BUDDY_SCM_PROVIDER=GITHUB
BUDDY_SCM_URL=https://github.com/buddyworks/my-project
BUDDY_WORKSPACE_DOMAIN=myworkspace
BUDDY_WORKSPACE_ID=1
BUDDY_WORKSPACE_NAME=My Workspace
BUDDY_WORKSPACE_URL=https://app.buddy.works/myworkspace
BUDDY=true

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printPullRequestProperties();

--EXPECT--
Is pull request:
string(3) "Yes"
Branch:
string(17) "feature/pr-branch"
Target branch:
string(4) "main"
