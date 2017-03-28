#!/usr/bin/env bash

rsync -rv --exclude-from=deploy-excludes . jcartledge_kinart@ssh.phx.nearlyfreespeech.net:/home/public
