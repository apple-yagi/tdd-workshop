
.PHONY: test
test:
	./vendor/bin/phpunit tests

.PHONY: watch
watch:
	./vendor/bin/phpunit-watcher watch ./tests
