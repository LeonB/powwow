#!/bin/bash

DIR="$( cd "$( dirname "$0" )" && pwd )"
exec "$DIR/app/Console/cake" $*
