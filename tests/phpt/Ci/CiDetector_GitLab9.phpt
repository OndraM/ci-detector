--TEST--
GitLab CI 9+: Detect properties

--ENV--
_=/usr/bin/env
CI_COMMIT_BEFORE_SHA=faaf3a986cf77f46a40af16186a31f2c54737eae
CI_COMMIT_DESCRIPTION=
CI_COMMIT_MESSAGE=Test Gitlab CI
CI_COMMIT_REF_NAME=test-gitlab
CI_COMMIT_REF_SLUG=test-gitlab
CI_COMMIT_SHA=5d25f4849bbd812e4e64e78d4aaa94a72e6cab5c
CI_COMMIT_TITLE=Test Gitlab CI
CI_CONFIG_PATH=.gitlab-ci.yml
CI_DISPOSABLE_ENVIRONMENT=true
CI_JOB_ID=111560648
CI_JOB_NAME=job1
CI_JOB_STAGE=test
CI_JOB_TOKEN=xxxxxxxxxxxxxxxxxxxx
CI_JOB_URL=https://gitlab.com/OndraM/ci-detector/-/jobs/111560648
CI_PIPELINE_ID=33997853
CI_PIPELINE_IID=5
CI_PIPELINE_SOURCE=push
CI_PIPELINE_URL=https://gitlab.com/OndraM/ci-detector/pipelines/33997853
CI_PROJECT_DIR=/builds/OndraM/ci-detector
CI_PROJECT_ID=9009516
CI_PROJECT_NAME=ci-detector
CI_PROJECT_NAMESPACE=OndraM
CI_PROJECT_PATH_SLUG=ondram-ci-detector
CI_PROJECT_PATH=OndraM/ci-detector
CI_PROJECT_URL=https://gitlab.com/OndraM/ci-detector
CI_PROJECT_VISIBILITY=public
CI_REGISTRY_IMAGE=registry.gitlab.com/ondram/ci-detector
CI_REGISTRY_PASSWORD=xxxxxxxxxxxxxxxxxxxx
CI_REGISTRY_USER=gitlab-ci-token
CI_REGISTRY=registry.gitlab.com
CI_REPOSITORY_URL=https://gitlab-ci-token:xxxxxxxxxxxxxxxxxxxx@gitlab.com/OndraM/ci-detector.git
CI_RUNNER_DESCRIPTION=shared-runners-manager-4.gitlab.com
CI_RUNNER_EXECUTABLE_ARCH=linux/amd64
CI_RUNNER_ID=44949
CI_RUNNER_REVISION=1ff344e1
CI_RUNNER_TAGS=gce, east-c, shared, docker, linux, ruby, mysql, postgres, mongo, git-annex
CI_RUNNER_VERSION=11.4.0-rc1
CI_SERVER_NAME=GitLab
CI_SERVER_REVISION=cfe266c
CI_SERVER_TLS_CA_FILE=/builds/OndraM/ci-detector.tmp/CI_SERVER_TLS_CA_FILE
CI_SERVER_VERSION_MAJOR=11
CI_SERVER_VERSION_MINOR=4
CI_SERVER_VERSION_PATCH=0
CI_SERVER_VERSION=11.4.0-ee
CI_SERVER=yes
CI=true
DOCKER_DRIVER=overlay2
FF_K8S_USE_ENTRYPOINT_OVER_COMMAND=true
FOO=BARBAZ
GITLAB_CI=true
GITLAB_FEATURES=audit_events,burndown_charts,code_owners,contribution_analytics,elastic_search,export_issues,group_burndown_charts,group_webhooks,issuable_default_templates,issue_board_focus_mode,issue_weights,jenkins_integration,ldap_group_sync,member_lock,merge_request_approvers,multiple_ldap_servers,multiple_issue_assignees,multiple_project_issue_boards,push_rules,project_creation_level,protected_refs_for_users,related_issues,repository_mirrors,repository_size_limit,scoped_issue_board,admin_audit_log,auditor_user,board_assignee_lists,board_milestone_lists,cross_project_pipelines,custom_file_templates,email_additional_text,db_load_balancing,deploy_board,extended_audit_events,file_locks,geo,github_project_service_integration,jira_dev_panel_integration,ldap_group_sync_filter,multiple_clusters,multiple_group_issue_boards,merge_request_performance_metrics,object_storage,group_saml,service_desk,unprotection_restrictions,variable_environment_scope,reject_unsigned_commits,commit_committer_check,external_authorization_service,ci_cd_projects,protected_environments,system_header_footer,custom_project_templates,packages,code_owner_as_approver_suggestion,feature_flags,batch_comments,dependency_scanning,license_management,sast,sast_container,cluster_health,dast,epics,chatops,pod_logs,pseudonymizer,prometheus_alerts
GITLAB_USER_EMAIL=ondrej.machulda@gmail.com
GITLAB_USER_ID=405597
GITLAB_USER_LOGIN=OndraM
GITLAB_USER_NAME=Ondřej Machulda
HOME=/root
HOSTNAME=runner-72989761-project-9009516-concurrent-0
OLDPWD=/
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
PHP_ASC_URL=https://secure.php.net/get/php-7.2.11.tar.xz.asc/from/this/mirror
PHP_CFLAGS=-fstack-protector-strong -fpic -fpie -O2
PHP_CPPFLAGS=-fstack-protector-strong -fpic -fpie -O2
PHP_INI_DIR=/usr/local/etc/php
PHP_LDFLAGS=-Wl,-O1 -Wl,--hash-style=both -pie
PHP_MD5=
PHP_SHA256=da1a705c0bc46410e330fc6baa967666c8cd2985378fb9707c01a8e33b01d985
PHP_URL=https://secure.php.net/get/php-7.2.11.tar.xz/from/this/mirror
PHP_VERSION=7.2.11
PWD=/builds/OndraM/ci-detector
SHLVL=1

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(27) "OndraM\CiDetector\Ci\GitLab"
CI name:
string(6) "GitLab"
Is pull request:
string(2) "No"
Build number:
string(9) "111560648"
Build url:
string(54) "https://gitlab.com/OndraM/ci-detector/builds/111560648"
Git commit:
string(40) "5d25f4849bbd812e4e64e78d4aaa94a72e6cab5c"
Git branch:
string(11) "test-gitlab"
Repository name:
string(18) "OndraM/ci-detector"
Repository url:
string(78) "https://gitlab-ci-token:xxxxxxxxxxxxxxxxxxxx@gitlab.com/OndraM/ci-detector.git"
