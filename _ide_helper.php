<?php
// @formatter:off

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 8.55.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace Illuminate\Support\Facades {

    use use App\Console\Kernel;
    use App\Models\User;
    use BadMethodCallException;
    use Closure;
    use Countable;
    use DateInterval;
    use DateTimeInterface;
    use Doctrine\DBAL\DBALException;
    use Doctrine\DBAL\Schema\AbstractSchemaManager;
    use Doctrine\DBAL\Schema\Column;
    use Exception;
    use Generator;
    use GuzzleHttp\Promise\PromiseInterface;
    use Illuminate\Auth\Access\AuthorizationException;
    use Illuminate\Auth\Access\iterable;
    use Illuminate\Auth\AuthenticationException;
    use Illuminate\Auth\AuthManager;
    use Illuminate\Auth\Passwords\PasswordBrokerManager;
    use Illuminate\Auth\Passwords\TokenRepositoryInterface;
    use Illuminate\Auth\SessionGuard;
    use Illuminate\Auth\TokenGuard;
    use Illuminate\Broadcasting\Broadcasters\Broadcaster;
    use Illuminate\Broadcasting\BroadcastManager;
    use Illuminate\Broadcasting\PendingBroadcast;
    use Illuminate\Bus\Batch;
    use Illuminate\Bus\PendingBatch;
    use Illuminate\Cache\CacheManager;
    use Illuminate\Cache\FileStore;
    use Illuminate\Cache\TaggedCache;
    use Illuminate\Config\Repository;
    use Illuminate\Contracts\Auth\Authenticatable;
    use Illuminate\Contracts\Auth\CanResetPassword;
    use Illuminate\Contracts\Auth\Guard;
    use Illuminate\Contracts\Auth\PasswordBroker;
    use Illuminate\Contracts\Auth\StatefulGuard;
    use Illuminate\Contracts\Auth\UserProvider;
    use Illuminate\Contracts\Cache\Lock;
    use Illuminate\Contracts\Container\BindingResolutionException;
    use Illuminate\Contracts\Container\CircularDependencyException;
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Container\ContextualBindingBuilder;use Illuminate\Contracts\Cookie\QueueingFactory;
    use Illuminate\Contracts\Encryption\DecryptException;
    use Illuminate\Contracts\Encryption\EncryptException;
    use Illuminate\Contracts\Events\Dispatcher;
    use Illuminate\Contracts\Filesystem\Cloud;
    use Illuminate\Contracts\Filesystem\FileExistsException;
    use Illuminate\Contracts\Filesystem\FileNotFoundException;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\Mail\Mailable;
    use Illuminate\Contracts\Queue\Job;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Contracts\Support\Htmlable;
    use Illuminate\Contracts\Translation\Loader;
    use Illuminate\Contracts\Translation\Translator;
    use Illuminate\Contracts\View\Engine;
    use Illuminate\Cookie\CookieJar;
    use Illuminate\Database\Connection;
    use Illuminate\Database\DatabaseManager;
    use Illuminate\Database\DatabaseTransactionsManager;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Illuminate\Database\Grammar;
    use Illuminate\Database\MySqlConnection;
    use Illuminate\Database\Query\Builder;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Database\Query\Processors\Processor;
    use Illuminate\Database\Schema\MySqlBuilder;
    use Illuminate\Database\Schema\MySqlSchemaState;
    use Illuminate\Encryption\Encrypter;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Filesystem\FilesystemAdapter;
    use Illuminate\Filesystem\FilesystemManager;
    use Illuminate\Foundation\Bus\PendingChain;
    use Illuminate\Foundation\Bus\PendingDispatch;
    use Illuminate\Foundation\Console\ClosureCommand;
    use Illuminate\Hashing\Argon2IdHasher;
    use Illuminate\Hashing\ArgonHasher;
    use Illuminate\Hashing\BcryptHasher;
    use Illuminate\Hashing\HashManager;
    use Illuminate\Http\Client\PendingRequest;
    use Illuminate\Http\Client\ResponseSequence;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\UploadedFile;
    use Illuminate\Log\Logger;
    use Illuminate\Log\LogManager;
    use Illuminate\Mail\Mailer;
    use Illuminate\Mail\MailManager;
    use Illuminate\Mail\PendingMail;
    use Illuminate\Notifications\ChannelManager;
    use Illuminate\Queue\QueueManager;
    use Illuminate\Queue\SyncQueue;
    use Illuminate\Routing\Exceptions\UrlGenerationException;
    use Illuminate\Routing\PendingResourceRegistration;
    use Illuminate\Routing\Redirector;
    use Illuminate\Routing\ResponseFactory;
    use Illuminate\Routing\RouteCollection;
    use Illuminate\Routing\RouteCollectionInterface;
    use Illuminate\Routing\Router;
    use Illuminate\Routing\RouteRegistrar;
    use Illuminate\Routing\UrlGenerator;
    use Illuminate\Session\SessionManager;
    use Illuminate\Session\Store;
    use Illuminate\Support\Collection;
    use Illuminate\Support\LazyCollection;
    use Illuminate\Support\ServiceProvider;use Illuminate\Support\Testing\Fakes\BusFake;
    use Illuminate\Support\Testing\Fakes\EventFake;
    use Illuminate\Support\Testing\Fakes\MailFake;
    use Illuminate\Support\Testing\Fakes\NotificationFake;
    use Illuminate\Support\Testing\Fakes\QueueFake;
    use Illuminate\Translation\MessageSelector;
    use Illuminate\Validation\PresenceVerifierInterface;
    use Illuminate\Validation\ValidationException;
    use Illuminate\View\Compilers\BladeCompiler;
    use Illuminate\View\Engines\EngineResolver;
    use Illuminate\View\Factory;
    use Illuminate\View\ViewFinderInterface;
    use InvalidArgumentException;
    use League\Flysystem\AwsS3v3\AwsS3Adapter;
    use League\Flysystem\FilesystemInterface;
    use LogicException;
    use PDO;
    use PDOStatement;
    use Psr\Log\LoggerInterface;
    use ReflectionException;
    use RuntimeException;
    use SessionHandlerInterface;
    use SplFileInfo;
    use stdClass;
    use Swift_Transport;
    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Exception\CommandNotFoundException;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\HttpFoundation\BinaryFileResponse;
    use Symfony\Component\HttpFoundation\ParameterBag;
    use Symfony\Component\HttpFoundation\StreamedResponse;
    use Symfony\Component\HttpKernel\Exception\HttpException;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;use Symfony\Component\Routing\Exception\RouteNotFoundException;
    use Throwable;use TypeError;

    /**
     *
     *
     * @see \Illuminate\Contracts\Foundation\Application
     */
    class App
    {
        /**
         * Get the version number of the application.
         *
         * @return string
         * @static
         */
        public static function version()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->version();
        }

        /**
         * Run the given array of bootstrap classes.
         *
         * @param string[] $bootstrappers
         * @return void
         * @static
         */
        public static function bootstrapWith($bootstrappers)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bootstrapWith($bootstrappers);
        }

        /**
         * Register a callback to run after loading the environment.
         *
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function afterLoadingEnvironment($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterLoadingEnvironment($callback);
        }

        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeBootstrapping($bootstrapper, $callback);
        }

        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function afterBootstrapping($bootstrapper, $callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterBootstrapping($bootstrapper, $callback);
        }

        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool
         * @static
         */
        public static function hasBeenBootstrapped()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasBeenBootstrapped();
        }

        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function setBasePath($basePath)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->setBasePath($basePath);
        }

        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->path($path);
        }

        /**
         * Set the application directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useAppPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useAppPath($path);
        }

        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path Optionally, a path to append to the base path
         * @return string
         * @static
         */
        public static function basePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->basePath($path);
        }

        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path Optionally, a path to append to the bootstrap path
         * @return string
         * @static
         */
        public static function bootstrapPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bootstrapPath($path);
        }

        /**
         * Get the path to the application configuration files.
         *
         * @param string $path Optionally, a path to append to the config path
         * @return string
         * @static
         */
        public static function configPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configPath($path);
        }

        /**
         * Get the path to the database directory.
         *
         * @param string $path Optionally, a path to append to the database path
         * @return string
         * @static
         */
        public static function databasePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->databasePath($path);
        }

        /**
         * Set the database directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useDatabasePath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useDatabasePath($path);
        }

        /**
         * Get the path to the language files.
         *
         * @return string
         * @static
         */
        public static function langPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->langPath();
        }

        /**
         * Set the language file directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useLangPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useLangPath($path);
        }

        /**
         * Get the path to the public / web directory.
         *
         * @return string
         * @static
         */
        public static function publicPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->publicPath();
        }

        /**
         * Get the path to the storage directory.
         *
         * @return string
         * @static
         */
        public static function storagePath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->storagePath();
        }

        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useStoragePath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useStoragePath($path);
        }

        /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function resourcePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resourcePath($path);
        }

        /**
         * Get the path to the views directory.
         *
         * This method returns the first configured path in the array of view paths.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function viewPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->viewPath($path);
        }

        /**
         * Get the path to the environment file directory.
         *
         * @return string
         * @static
         */
        public static function environmentPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentPath();
        }

        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useEnvironmentPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useEnvironmentPath($path);
        }

        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function loadEnvironmentFrom($file)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->loadEnvironmentFrom($file);
        }

        /**
         * Get the environment file the application is using.
         *
         * @return string
         * @static
         */
        public static function environmentFile()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFile();
        }

        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string
         * @static
         */
        public static function environmentFilePath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFilePath();
        }

        /**
         * Get or check the current application environment.
         *
         * @param string|array $environments
         * @return string|bool
         * @static
         */
        public static function environment(...$environments)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environment(...$environments);
        }

        /**
         * Determine if the application is in the local environment.
         *
         * @return bool
         * @static
         */
        public static function isLocal()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocal();
        }

        /**
         * Determine if the application is in the production environment.
         *
         * @return bool
         * @static
         */
        public static function isProduction()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isProduction();
        }

        /**
         * Detect the application's current environment.
         *
         * @param Closure $callback
         * @return string
         * @static
         */
        public static function detectEnvironment($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->detectEnvironment($callback);
        }

        /**
         * Determine if the application is running in the console.
         *
         * @return bool
         * @static
         */
        public static function runningInConsole()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningInConsole();
        }

        /**
         * Determine if the application is running unit tests.
         *
         * @return bool
         * @static
         */
        public static function runningUnitTests()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningUnitTests();
        }

        /**
         * Register all of the configured providers.
         *
         * @return void
         * @static
         */
        public static function registerConfiguredProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerConfiguredProviders();
        }

        /**
         * Register a service provider with the application.
         *
         * @param ServiceProvider|string $provider
         * @param bool $force
         * @return ServiceProvider
         * @static
         */
        public static function register($provider, $force = false)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->register($provider, $force);
        }

        /**
         * Get the registered service provider instance if it exists.
         *
         * @param ServiceProvider|string $provider
         * @return ServiceProvider|null
         * @static
         */
        public static function getProvider($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProvider($provider);
        }

        /**
         * Get the registered service provider instances if any exist.
         *
         * @param ServiceProvider|string $provider
         * @return array
         * @static
         */
        public static function getProviders($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProviders($provider);
        }

        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return ServiceProvider
         * @static
         */
        public static function resolveProvider($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolveProvider($provider);
        }

        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void
         * @static
         */
        public static function loadDeferredProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProviders();
        }

        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void
         * @static
         */
        public static function loadDeferredProvider($service)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProvider($service);
        }

        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void
         * @static
         */
        public static function registerDeferredProvider($provider, $service = null)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerDeferredProvider($provider, $service);
        }

        /**
         * Resolve the given type from the container.
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed
         * @static
         */
        public static function make($abstract, $parameters = [])
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->make($abstract, $parameters);
        }

        /**
         * Determine if the given abstract type has been bound.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function bound($abstract)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bound($abstract);
        }

        /**
         * Determine if the application has booted.
         *
         * @return bool
         * @static
         */
        public static function isBooted()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isBooted();
        }

        /**
         * Boot the application's service providers.
         *
         * @return void
         * @static
         */
        public static function boot()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->boot();
        }

        /**
         * Register a new boot listener.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function booting($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booting($callback);
        }

        /**
         * Register a new "booted" listener.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function booted($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booted($callback);
        }

        /**
         * {@inheritdoc}
         *
         * @static
         */
        public static function handle($request, $type = 1, $catch = true)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->handle($request, $type, $catch);
        }

        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool
         * @static
         */
        public static function shouldSkipMiddleware()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->shouldSkipMiddleware();
        }

        /**
         * Get the path to the cached services.php file.
         *
         * @return string
         * @static
         */
        public static function getCachedServicesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedServicesPath();
        }

        /**
         * Get the path to the cached packages.php file.
         *
         * @return string
         * @static
         */
        public static function getCachedPackagesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedPackagesPath();
        }

        /**
         * Determine if the application configuration is cached.
         *
         * @return bool
         * @static
         */
        public static function configurationIsCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configurationIsCached();
        }

        /**
         * Get the path to the configuration cache file.
         *
         * @return string
         * @static
         */
        public static function getCachedConfigPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedConfigPath();
        }

        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         * @static
         */
        public static function routesAreCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->routesAreCached();
        }

        /**
         * Get the path to the routes cache file.
         *
         * @return string
         * @static
         */
        public static function getCachedRoutesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedRoutesPath();
        }

        /**
         * Determine if the application events are cached.
         *
         * @return bool
         * @static
         */
        public static function eventsAreCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->eventsAreCached();
        }

        /**
         * Get the path to the events cache file.
         *
         * @return string
         * @static
         */
        public static function getCachedEventsPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedEventsPath();
        }

        /**
         * Add new prefix to list of absolute path prefixes.
         *
         * @param string $prefix
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function addAbsoluteCachePathPrefix($prefix)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->addAbsoluteCachePathPrefix($prefix);
        }

        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         * @static
         */
        public static function isDownForMaintenance()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDownForMaintenance();
        }

        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void
         * @throws HttpException
         * @throws NotFoundHttpException
         * @static
         */
        public static function abort($code, $message = '', $headers = [])
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->abort($code, $message, $headers);
        }

        /**
         * Register a terminating callback with the application.
         *
         * @param callable|string $callback
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function terminating($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->terminating($callback);
        }

        /**
         * Terminate the application.
         *
         * @return void
         * @static
         */
        public static function terminate()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->terminate();
        }

        /**
         * Get the service providers that have been loaded.
         *
         * @return array
         * @static
         */
        public static function getLoadedProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLoadedProviders();
        }

        /**
         * Determine if the given service provider is loaded.
         *
         * @param string $provider
         * @return bool
         * @static
         */
        public static function providerIsLoaded($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->providerIsLoaded($provider);
        }

        /**
         * Get the application's deferred services.
         *
         * @return array
         * @static
         */
        public static function getDeferredServices()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getDeferredServices();
        }

        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void
         * @static
         */
        public static function setDeferredServices($services)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setDeferredServices($services);
        }

        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void
         * @static
         */
        public static function addDeferredServices($services)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addDeferredServices($services);
        }

        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool
         * @static
         */
        public static function isDeferredService($service)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDeferredService($service);
        }

        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void
         * @static
         */
        public static function provideFacades($namespace)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->provideFacades($namespace);
        }

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLocale();
        }

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
        public static function currentLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->currentLocale();
        }

        /**
         * Get the current application fallback locale.
         *
         * @return string
         * @static
         */
        public static function getFallbackLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getFallbackLocale();
        }

        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void
         * @static
         */
        public static function setLocale($locale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setLocale($locale);
        }

        /**
         * Set the current application fallback locale.
         *
         * @param string $fallbackLocale
         * @return void
         * @static
         */
        public static function setFallbackLocale($fallbackLocale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setFallbackLocale($fallbackLocale);
        }

        /**
         * Determine if the application locale is the given locale.
         *
         * @param string $locale
         * @return bool
         * @static
         */
        public static function isLocale($locale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocale($locale);
        }

        /**
         * Register the core class aliases in the container.
         *
         * @return void
         * @static
         */
        public static function registerCoreContainerAliases()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerCoreContainerAliases();
        }

        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->flush();
        }

        /**
         * Get the application namespace.
         *
         * @return string
         * @throws RuntimeException
         * @static
         */
        public static function getNamespace()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getNamespace();
        }

        /**
         * Define a contextual binding.
         *
         * @param array|string $concrete
         * @return ContextualBindingBuilder
         * @static
         */
        public static function when($concrete)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->when($concrete);
        }

        /**
         * Returns true if the container can return an entry for the given identifier.
         *
         * Returns false otherwise.
         *
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         * @return bool
         * @static
         */
        public static function has($id)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->has($id);
        }

        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function resolved($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolved($abstract);
        }

        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function isShared($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isShared($abstract);
        }

        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function isAlias($name)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isAlias($name);
        }

        /**
         * Register a binding with the container.
         *
         * @param string $abstract
         * @param Closure|string|null $concrete
         * @param bool $shared
         * @return void
         * @throws TypeError
         * @static
         */
        public static function bind($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bind($abstract, $concrete, $shared);
        }

        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool
         * @static
         */
        public static function hasMethodBinding($method)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasMethodBinding($method);
        }

        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param array|string $method
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function bindMethod($method, $callback)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindMethod($method, $callback);
        }

        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed
         * @static
         */
        public static function callMethodBinding($method, $instance)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->callMethodBinding($method, $instance);
        }

        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param Closure|string $implementation
         * @return void
         * @static
         */
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addContextualBinding($concrete, $abstract, $implementation);
        }

        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param Closure|string|null $concrete
         * @param bool $shared
         * @return void
         * @static
         */
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindIf($abstract, $concrete, $shared);
        }

        /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function singleton($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singleton($abstract, $concrete);
        }

        /**
         * Register a shared binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function singletonIf($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singletonIf($abstract, $concrete);
        }

        /**
         * Register a scoped binding in the container.
         *
         * @param string $abstract
         * @param Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function scoped($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scoped($abstract, $concrete);
        }

        /**
         * Register a scoped binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function scopedIf($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scopedIf($abstract, $concrete);
        }

        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param Closure $closure
         * @return void
         * @throws InvalidArgumentException
         * @static
         */
        public static function extend($abstract, $closure)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->extend($abstract, $closure);
        }

        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return mixed
         * @static
         */
        public static function instance($abstract, $instance)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->instance($abstract, $instance);
        }

        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void
         * @static
         */
        public static function tag($abstracts, $tags)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->tag($abstracts, $tags);
        }

        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return \Illuminate\Container\iterable
         * @static
         */
        public static function tagged($tag)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->tagged($tag);
        }

        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void
         * @throws LogicException
         * @static
         */
        public static function alias($abstract, $alias)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->alias($abstract, $alias);
        }

        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function rebinding($abstract, $callback)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->rebinding($abstract, $callback);
        }

        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed
         * @static
         */
        public static function refresh($abstract, $target, $method)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->refresh($abstract, $target, $method);
        }

        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param Closure $callback
         * @param array $parameters
         * @return Closure
         * @static
         */
        public static function wrap($callback, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->wrap($callback, $parameters);
        }

        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array<string,  mixed> $parameters
         * @param string|null $defaultMethod
         * @return mixed
         * @throws InvalidArgumentException
         * @static
         */
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->call($callback, $parameters, $defaultMethod);
        }

        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         * @return Closure
         * @static
         */
        public static function factory($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->factory($abstract);
        }

        /**
         * An alias function name for make().
         *
         * @param string|callable $abstract
         * @param array $parameters
         * @return mixed
         * @throws BindingResolutionException
         * @static
         */
        public static function makeWith($abstract, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->makeWith($abstract, $parameters);
        }

        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
         * @return mixed Entry.
         * @static
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         */
        public static function get($id)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->get($id);
        }

        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param Closure|string $concrete
         * @return mixed
         * @throws BindingResolutionException
         * @throws CircularDependencyException
         * @static
         */
        public static function build($concrete)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->build($concrete);
        }

        /**
         * Register a new before resolving callback for all types.
         *
         * @param Closure|string $abstract
         * @param Closure|null $callback
         * @return void
         * @static
         */
        public static function beforeResolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeResolving($abstract, $callback);
        }

        /**
         * Register a new resolving callback.
         *
         * @param Closure|string $abstract
         * @param Closure|null $callback
         * @return void
         * @static
         */
        public static function resolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->resolving($abstract, $callback);
        }

        /**
         * Register a new after resolving callback for all types.
         *
         * @param Closure|string $abstract
         * @param Closure|null $callback
         * @return void
         * @static
         */
        public static function afterResolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterResolving($abstract, $callback);
        }

        /**
         * Get the container's bindings.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getBindings();
        }

        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string
         * @static
         */
        public static function getAlias($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getAlias($abstract);
        }

        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void
         * @static
         */
        public static function forgetExtenders($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetExtenders($abstract);
        }

        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void
         * @static
         */
        public static function forgetInstance($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstance($abstract);
        }

        /**
         * Clear all of the instances from the container.
         *
         * @return void
         * @static
         */
        public static function forgetInstances()
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstances();
        }

        /**
         * Clear all of the scoped instances from the container.
         *
         * @return void
         * @static
         */
        public static function forgetScopedInstances()
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetScopedInstances();
        }

        /**
         * Get the globally available instance of the container.
         *
         * @return static
         * @static
         */
        public static function getInstance()
        {            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::getInstance();
        }

        /**
         * Set the shared instance of the container.
         *
         * @param Container|null $container
         * @return Container|static
         * @static
         */
        public static function setInstance($container = null)
        {            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::setInstance($container);
        }

        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->offsetSet($key, $value);
        }

        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->offsetUnset($key);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Contracts\Console\Kernel
     */
    class Artisan
    {
        /**
         * Run the console application.
         *
         * @param InputInterface $input
         * @param OutputInterface|null $output
         * @return int
         * @static
         */
        public static function handle($input, $output = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            return $instance->handle($input, $output);
        }

        /**
         * Terminate the application.
         *
         * @param InputInterface $input
         * @param int $status
         * @return void
         * @static
         */
        public static function terminate($input, $status)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            $instance->terminate($input, $status);
        }

        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param Closure $callback
         * @return ClosureCommand
         * @static
         */
        public static function command($signature, $callback)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            return $instance->command($signature, $callback);
        }

        /**
         * Register the given command with the console application.
         *
         * @param Command $command
         * @return void
         * @static
         */
        public static function registerCommand($command)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            $instance->registerCommand($command);
        }

        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param OutputInterface|null $outputBuffer
         * @return int
         * @throws CommandNotFoundException
         * @static
         */
        public static function call($command, $parameters = [], $outputBuffer = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            return $instance->call($command, $parameters, $outputBuffer);
        }

        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return PendingDispatch
         * @static
         */
        public static function queue($command, $parameters = [])
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            return $instance->queue($command, $parameters);
        }

        /**
         * Get all of the commands registered with the console.
         *
         * @return array
         * @static
         */
        public static function all()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            return $instance->all();
        }

        /**
         * Get the output for the last run command.
         *
         * @return string
         * @static
         */
        public static function output()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            return $instance->output();
        }

        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void
         * @static
         */
        public static function bootstrap()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            $instance->bootstrap();
        }

        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
         * @return void
         * @static
         */
        public static function setArtisan($artisan)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var Kernel $instance */
            $instance->setArtisan($artisan);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Contracts\Auth\Factory
     * @see \Illuminate\Contracts\Auth\Guard
     * @see \Illuminate\Contracts\Auth\StatefulGuard
     */
    class Auth
    {
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string|null $name
         * @return Guard|StatefulGuard
         * @static
         */
        public static function guard($name = null)
        {
            /** @var AuthManager $instance */
            return $instance->guard($name);
        }

        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return SessionGuard
         * @static
         */
        public static function createSessionDriver($name, $config)
        {
            /** @var AuthManager $instance */
            return $instance->createSessionDriver($name, $config);
        }

        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return TokenGuard
         * @static
         */
        public static function createTokenDriver($name, $config)
        {
            /** @var AuthManager $instance */
            return $instance->createTokenDriver($name, $config);
        }

        /**
         * Get the default authentication driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var AuthManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function shouldUse($name)
        {
            /** @var AuthManager $instance */
            $instance->shouldUse($name);
        }

        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var AuthManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return AuthManager
         * @static
         */
        public static function viaRequest($driver, $callback)
        {
            /** @var AuthManager $instance */
            return $instance->viaRequest($driver, $callback);
        }

        /**
         * Get the user resolver callback.
         *
         * @return Closure
         * @static
         */
        public static function userResolver()
        {
            /** @var AuthManager $instance */
            return $instance->userResolver();
        }

        /**
         * Set the callback to be used to resolve users.
         *
         * @param Closure $userResolver
         * @return AuthManager
         * @static
         */
        public static function resolveUsersUsing($userResolver)
        {
            /** @var AuthManager $instance */
            return $instance->resolveUsersUsing($userResolver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return AuthManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var AuthManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param Closure $callback
         * @return AuthManager
         * @static
         */
        public static function provider($name, $callback)
        {
            /** @var AuthManager $instance */
            return $instance->provider($name, $callback);
        }

        /**
         * Determines if any guards have already been resolved.
         *
         * @return bool
         * @static
         */
        public static function hasResolvedGuards()
        {
            /** @var AuthManager $instance */
            return $instance->hasResolvedGuards();
        }

        /**
         * Forget all of the resolved guard instances.
         *
         * @return AuthManager
         * @static
         */
        public static function forgetGuards()
        {
            /** @var AuthManager $instance */
            return $instance->forgetGuards();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param Application $app
         * @return AuthManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var AuthManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return UserProvider|null
         * @throws InvalidArgumentException
         * @static
         */
        public static function createUserProvider($provider = null)
        {
            /** @var AuthManager $instance */
            return $instance->createUserProvider($provider);
        }

        /**
         * Get the default user provider name.
         *
         * @return string
         * @static
         */
        public static function getDefaultUserProvider()
        {
            /** @var AuthManager $instance */
            return $instance->getDefaultUserProvider();
        }

        /**
         * Get the currently authenticated user.
         *
         * @return User|null
         * @static
         */
        public static function user()
        {
            /** @var SessionGuard $instance */
            return $instance->user();
        }

        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null
         * @static
         */
        public static function id()
        {
            /** @var SessionGuard $instance */
            return $instance->id();
        }

        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool
         * @static
         */
        public static function once($credentials = [])
        {
            /** @var SessionGuard $instance */
            return $instance->once($credentials);
        }

        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return User|false
         * @static
         */
        public static function onceUsingId($id)
        {
            /** @var SessionGuard $instance */
            return $instance->onceUsingId($id);
        }

        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool
         * @static
         */
        public static function validate($credentials = [])
        {
            /** @var SessionGuard $instance */
            return $instance->validate($credentials);
        }

        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */
        public static function basic($field = 'email', $extraConditions = [])
        {
            /** @var SessionGuard $instance */
            return $instance->basic($field, $extraConditions);
        }

        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */
        public static function onceBasic($field = 'email', $extraConditions = [])
        {
            /** @var SessionGuard $instance */
            return $instance->onceBasic($field, $extraConditions);
        }

        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @return bool
         * @static
         */
        public static function attempt($credentials = [], $remember = false)
        {
            /** @var SessionGuard $instance */
            return $instance->attempt($credentials, $remember);
        }

        /**
         * Attempt to authenticate a user with credentials and additional callbacks.
         *
         * @param array $credentials
         * @param array|callable $callbacks
         * @param false $remember
         * @return bool
         * @static
         */
        public static function attemptWhen($credentials = [], $callbacks = null, $remember = false)
        {
            /** @var SessionGuard $instance */
            return $instance->attemptWhen($credentials, $callbacks, $remember);
        }

        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return User|false
         * @static
         */
        public static function loginUsingId($id, $remember = false)
        {
            /** @var SessionGuard $instance */
            return $instance->loginUsingId($id, $remember);
        }

        /**
         * Log a user into the application.
         *
         * @param Authenticatable $user
         * @param bool $remember
         * @return void
         * @static
         */
        public static function login($user, $remember = false)
        {
            /** @var SessionGuard $instance */
            $instance->login($user, $remember);
        }

        /**
         * Log the user out of the application.
         *
         * @return void
         * @static
         */
        public static function logout()
        {
            /** @var SessionGuard $instance */
            $instance->logout();
        }

        /**
         * Log the user out of the application on their current device only.
         *
         * This method does not cycle the "remember" token.
         *
         * @return void
         * @static
         */
        public static function logoutCurrentDevice()
        {
            /** @var SessionGuard $instance */
            $instance->logoutCurrentDevice();
        }

        /**
         * Invalidate other sessions for the current user.
         *
         * The application must be using the AuthenticateSession middleware.
         *
         * @param string $password
         * @param string $attribute
         * @return User|null
         * @throws AuthenticationException
         * @static
         */
        public static function logoutOtherDevices($password, $attribute = 'password')
        {
            /** @var SessionGuard $instance */
            return $instance->logoutOtherDevices($password, $attribute);
        }

        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function attempting($callback)
        {
            /** @var SessionGuard $instance */
            $instance->attempting($callback);
        }

        /**
         * Get the last user we attempted to authenticate.
         *
         * @return User
         * @static
         */
        public static function getLastAttempted()
        {
            /** @var SessionGuard $instance */
            return $instance->getLastAttempted();
        }

        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string
         * @static
         */
        public static function getName()
        {
            /** @var SessionGuard $instance */
            return $instance->getName();
        }

        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string
         * @static
         */
        public static function getRecallerName()
        {
            /** @var SessionGuard $instance */
            return $instance->getRecallerName();
        }

        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool
         * @static
         */
        public static function viaRemember()
        {
            /** @var SessionGuard $instance */
            return $instance->viaRemember();
        }

        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return QueueingFactory
         * @throws RuntimeException
         * @static
         */
        public static function getCookieJar()
        {
            /** @var SessionGuard $instance */
            return $instance->getCookieJar();
        }

        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param QueueingFactory $cookie
         * @return void
         * @static
         */
        public static function setCookieJar($cookie)
        {
            /** @var SessionGuard $instance */
            $instance->setCookieJar($cookie);
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return Dispatcher
         * @static
         */
        public static function getDispatcher()
        {
            /** @var SessionGuard $instance */
            return $instance->getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param Dispatcher $events
         * @return void
         * @static
         */
        public static function setDispatcher($events)
        {
            /** @var SessionGuard $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @static
         */
        public static function getSession()
        {
            /** @var SessionGuard $instance */
            return $instance->getSession();
        }

        /**
         * Return the currently cached user.
         *
         * @return User|null
         * @static
         */
        public static function getUser()
        {
            /** @var SessionGuard $instance */
            return $instance->getUser();
        }

        /**
         * Set the current user.
         *
         * @param Authenticatable $user
         * @return SessionGuard
         * @static
         */
        public static function setUser($user)
        {
            /** @var SessionGuard $instance */
            return $instance->setUser($user);
        }

        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request
         * @static
         */
        public static function getRequest()
        {
            /** @var SessionGuard $instance */
            return $instance->getRequest();
        }

        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return SessionGuard
         * @static
         */
        public static function setRequest($request)
        {
            /** @var SessionGuard $instance */
            return $instance->setRequest($request);
        }

        /**
         * Determine if the current user is authenticated. If not, throw an exception.
         *
         * @return User
         * @throws AuthenticationException
         * @static
         */
        public static function authenticate()
        {
            /** @var SessionGuard $instance */
            return $instance->authenticate();
        }

        /**
         * Determine if the guard has a user instance.
         *
         * @return bool
         * @static
         */
        public static function hasUser()
        {
            /** @var SessionGuard $instance */
            return $instance->hasUser();
        }

        /**
         * Determine if the current user is authenticated.
         *
         * @return bool
         * @static
         */
        public static function check()
        {
            /** @var SessionGuard $instance */
            return $instance->check();
        }

        /**
         * Determine if the current user is a guest.
         *
         * @return bool
         * @static
         */
        public static function guest()
        {
            /** @var SessionGuard $instance */
            return $instance->guest();
        }

        /**
         * Get the user provider used by the guard.
         *
         * @return UserProvider
         * @static
         */
        public static function getProvider()
        {
            /** @var SessionGuard $instance */
            return $instance->getProvider();
        }

        /**
         * Set the user provider used by the guard.
         *
         * @param UserProvider $provider
         * @return void
         * @static
         */
        public static function setProvider($provider)
        {
            /** @var SessionGuard $instance */
            $instance->setProvider($provider);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            SessionGuard::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            SessionGuard::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return SessionGuard::hasMacro($name);
        }

    }

    /**
     *
     *
     * @see \Illuminate\View\Compilers\BladeCompiler
     */
    class Blade
    {
        /**
         * Compile the view at the given path.
         *
         * @param string|null $path
         * @return void
         * @static
         */
        public static function compile($path = null)
        {
            /** @var BladeCompiler $instance */
            $instance->compile($path);
        }

        /**
         * Get the path currently being compiled.
         *
         * @return string
         * @static
         */
        public static function getPath()
        {
            /** @var BladeCompiler $instance */
            return $instance->getPath();
        }

        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void
         * @static
         */
        public static function setPath($path)
        {
            /** @var BladeCompiler $instance */
            $instance->setPath($path);
        }

        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function compileString($value)
        {
            /** @var BladeCompiler $instance */
            return $instance->compileString($value);
        }

        /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
         * @return string
         * @static
         */
        public static function stripParentheses($expression)
        {
            /** @var BladeCompiler $instance */
            return $instance->stripParentheses($expression);
        }

        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void
         * @static
         */
        public static function extend($compiler)
        {
            /** @var BladeCompiler $instance */
            $instance->extend($compiler);
        }

        /**
         * Get the extensions used by the compiler.
         *
         * @return array
         * @static
         */
        public static function getExtensions()
        {
            /** @var BladeCompiler $instance */
            return $instance->getExtensions();
        }

        /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         * @return void
         * @static
         */
        public static function if($name, $callback)
        {
            /** @var BladeCompiler $instance */
            $instance->if($name, $callback);
        }

        /**
         * Check the result of a condition.
         *
         * @param string $name
         * @param array $parameters
         * @return bool
         * @static
         */
        public static function check($name, ...$parameters)
        {
            /** @var BladeCompiler $instance */
            return $instance->check($name, ...$parameters);
        }

        /**
         * Register a class-based component alias directive.
         *
         * @param string $class
         * @param string|null $alias
         * @param string $prefix
         * @return void
         * @static
         */
        public static function component($class, $alias = null, $prefix = '')
        {
            /** @var BladeCompiler $instance */
            $instance->component($class, $alias, $prefix);
        }

        /**
         * Register an array of class-based components.
         *
         * @param array $components
         * @param string $prefix
         * @return void
         * @static
         */
        public static function components($components, $prefix = '')
        {
            /** @var BladeCompiler $instance */
            $instance->components($components, $prefix);
        }

        /**
         * Get the registered class component aliases.
         *
         * @return array
         * @static
         */
        public static function getClassComponentAliases()
        {
            /** @var BladeCompiler $instance */
            return $instance->getClassComponentAliases();
        }

        /**
         * Register a class-based component namespace.
         *
         * @param string $namespace
         * @param string $prefix
         * @return void
         * @static
         */
        public static function componentNamespace($namespace, $prefix)
        {
            /** @var BladeCompiler $instance */
            $instance->componentNamespace($namespace, $prefix);
        }

        /**
         * Get the registered class component namespaces.
         *
         * @return array
         * @static
         */
        public static function getClassComponentNamespaces()
        {
            /** @var BladeCompiler $instance */
            return $instance->getClassComponentNamespaces();
        }

        /**
         * Register a component alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void
         * @static
         */
        public static function aliasComponent($path, $alias = null)
        {
            /** @var BladeCompiler $instance */
            $instance->aliasComponent($path, $alias);
        }

        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void
         * @static
         */
        public static function include($path, $alias = null)
        {
            /** @var BladeCompiler $instance */
            $instance->include($path, $alias);
        }

        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void
         * @static
         */
        public static function aliasInclude($path, $alias = null)
        {
            /** @var BladeCompiler $instance */
            $instance->aliasInclude($path, $alias);
        }

        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void
         * @throws InvalidArgumentException
         * @static
         */
        public static function directive($name, $handler)
        {
            /** @var BladeCompiler $instance */
            $instance->directive($name, $handler);
        }

        /**
         * Get the list of custom directives.
         *
         * @return array
         * @static
         */
        public static function getCustomDirectives()
        {
            /** @var BladeCompiler $instance */
            return $instance->getCustomDirectives();
        }

        /**
         * Register a new precompiler.
         *
         * @param callable $precompiler
         * @return void
         * @static
         */
        public static function precompiler($precompiler)
        {
            /** @var BladeCompiler $instance */
            $instance->precompiler($precompiler);
        }

        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void
         * @static
         */
        public static function setEchoFormat($format)
        {
            /** @var BladeCompiler $instance */
            $instance->setEchoFormat($format);
        }

        /**
         * Set the "echo" format to double encode entities.
         *
         * @return void
         * @static
         */
        public static function withDoubleEncoding()
        {
            /** @var BladeCompiler $instance */
            $instance->withDoubleEncoding();
        }

        /**
         * Set the "echo" format to not double encode entities.
         *
         * @return void
         * @static
         */
        public static function withoutDoubleEncoding()
        {
            /** @var BladeCompiler $instance */
            $instance->withoutDoubleEncoding();
        }

        /**
         * Indicate that component tags should not be compiled.
         *
         * @return void
         * @static
         */
        public static function withoutComponentTags()
        {
            /** @var BladeCompiler $instance */
            $instance->withoutComponentTags();
        }

        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getCompiledPath($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler
            /** @var BladeCompiler $instance */
            return $instance->getCompiledPath($path);
        }

        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isExpired($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler
            /** @var BladeCompiler $instance */
            return $instance->isExpired($path);
        }

        /**
         * Get a new component hash for a component name.
         *
         * @param string $component
         * @return string
         * @static
         */
        public static function newComponentHash($component)
        {
            return BladeCompiler::newComponentHash($component);
        }

        /**
         * Compile a class component opening.
         *
         * @param string $component
         * @param string $alias
         * @param string $data
         * @param string $hash
         * @return string
         * @static
         */
        public static function compileClassComponentOpening($component, $alias, $data, $hash)
        {
            return BladeCompiler::compileClassComponentOpening($component, $alias, $data, $hash);
        }

        /**
         * Compile the end-component statements into valid PHP.
         *
         * @return string
         * @static
         */
        public static function compileEndComponentClass()
        {
            /** @var BladeCompiler $instance */
            return $instance->compileEndComponentClass();
        }

        /**
         * Sanitize the given component attribute value.
         *
         * @param mixed $value
         * @return mixed
         * @static
         */
        public static function sanitizeComponentAttribute($value)
        {
            return BladeCompiler::sanitizeComponentAttribute($value);
        }

        /**
         * Compile an end-once block into valid PHP.
         *
         * @return string
         * @static
         */
        public static function compileEndOnce()
        {
            /** @var BladeCompiler $instance */
            return $instance->compileEndOnce();
        }

        /**
         * Add a handler to be executed before echoing a given class.
         *
         * @param string|callable $class
         * @param callable|null $handler
         * @return void
         * @static
         */
        public static function stringable($class, $handler = null)
        {
            /** @var BladeCompiler $instance */
            $instance->stringable($class, $handler);
        }

        /**
         * Compile Blade echos into valid PHP.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function compileEchos($value)
        {
            /** @var BladeCompiler $instance */
            return $instance->compileEchos($value);
        }

        /**
         * Apply the echo handler for the value if it exists.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function applyEchoHandler($value)
        {
            /** @var BladeCompiler $instance */
            return $instance->applyEchoHandler($value);
        }

    }

    /**
     *
     *
     * @method static Broadcaster channel(string $channel, callable|string $callback, array $options = [])
     * @method static mixed auth(\Illuminate\Http\Request $request)
     * @see \Illuminate\Contracts\Broadcasting\Factory
     */
    class Broadcast
    {
        /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * @param array|null $attributes
         * @return void
         * @static
         */
        public static function routes($attributes = null)
        {
            /** @var BroadcastManager $instance */
            $instance->routes($attributes);
        }

        /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
         * @return string|null
         * @static
         */
        public static function socket($request = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->socket($request);
        }

        /**
         * Begin broadcasting an event.
         *
         * @param mixed|null $event
         * @return PendingBroadcast
         * @static
         */
        public static function event($event = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->event($event);
        }

        /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
         * @return void
         * @static
         */
        public static function queue($event)
        {
            /** @var BroadcastManager $instance */
            $instance->queue($event);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed
         * @static
         */
        public static function connection($driver = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->connection($driver);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $name
         * @return mixed
         * @static
         */
        public static function driver($name = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->driver($name);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var BroadcastManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var BroadcastManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var BroadcastManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return BroadcastManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var BroadcastManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return Application
         * @static
         */
        public static function getApplication()
        {
            /** @var BroadcastManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param Application $app
         * @return BroadcastManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var BroadcastManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return BroadcastManager
         * @static
         */
        public static function forgetDrivers()
        {
            /** @var BroadcastManager $instance */
            return $instance->forgetDrivers();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Contracts\Bus\Dispatcher
     */
    class Bus
    {
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed
         * @static
         */
        public static function dispatch($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatch($command);
        }

        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * Queueable jobs will be dispatched to the "sync" queue.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed
         * @static
         */
        public static function dispatchSync($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchSync($command, $handler);
        }

        /**
         * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed
         * @static
         */
        public static function dispatchNow($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchNow($command, $handler);
        }

        /**
         * Attempt to find the batch with the given ID.
         *
         * @param string $batchId
         * @return Batch|null
         * @static
         */
        public static function findBatch($batchId)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->findBatch($batchId);
        }

        /**
         * Create a new batch of queueable jobs.
         *
         * @param Collection|array|mixed $jobs
         * @return PendingBatch
         * @static
         */
        public static function batch($jobs)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->batch($jobs);
        }

        /**
         * Create a new chain of queueable jobs.
         *
         * @param Collection|array $jobs
         * @return PendingChain
         * @static
         */
        public static function chain($jobs)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->chain($jobs);
        }

        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool
         * @static
         */
        public static function hasCommandHandler($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->hasCommandHandler($command);
        }

        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return bool|mixed
         * @static
         */
        public static function getCommandHandler($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->getCommandHandler($command);
        }

        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed
         * @throws RuntimeException
         * @static
         */
        public static function dispatchToQueue($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchToQueue($command);
        }

        /**
         * Dispatch a command to its appropriate handler after the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return void
         * @static
         */
        public static function dispatchAfterResponse($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            $instance->dispatchAfterResponse($command, $handler);
        }

        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static function pipeThrough($pipes)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->pipeThrough($pipes);
        }

        /**
         * Map a command to a handler.
         *
         * @param array $map
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static function map($map)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->map($map);
        }

        /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatched($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertDispatched($command, $callback);
        }

        /**
         * Assert if a job was pushed a number of times.
         *
         * @param string $command
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedTimes($command, $times = 1)
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedTimes($command, $times);
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatched($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertNotDispatched($command, $callback);
        }

        /**
         * Assert if a job was explicitly dispatched synchronously based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatchedSync($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedSync($command, $callback);
        }

        /**
         * Assert if a job was pushed synchronously a number of times.
         *
         * @param string $command
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedSyncTimes($command, $times = 1)
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedSyncTimes($command, $times);
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatchedSync($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertNotDispatchedSync($command, $callback);
        }

        /**
         * Assert if a job was dispatched after the response was sent based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatchedAfterResponse($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedAfterResponse($command, $callback);
        }

        /**
         * Assert if a job was pushed after the response was sent a number of times.
         *
         * @param string $command
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedAfterResponseTimes($command, $times = 1)
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedAfterResponseTimes($command, $times);
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatchedAfterResponse($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertNotDispatchedAfterResponse($command, $callback);
        }

        /**
         * Assert if a chain of jobs was dispatched.
         *
         * @param array $expectedChain
         * @return void
         * @static
         */
        public static function assertChained($expectedChain)
        {
            /** @var BusFake $instance */
            $instance->assertChained($expectedChain);
        }

        /**
         * Assert if a job was dispatched with an empty chain based on a truth-test callback.
         *
         * @param string|Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertDispatchedWithoutChain($command, $callback = null)
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedWithoutChain($command, $callback);
        }

        /**
         * Assert if a batch was dispatched based on a truth-test callback.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function assertBatched($callback)
        {
            /** @var BusFake $instance */
            $instance->assertBatched($callback);
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function dispatched($command, $callback = null)
        {
            /** @var BusFake $instance */
            return $instance->dispatched($command, $callback);
        }

        /**
         * Get all of the jobs dispatched synchronously matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function dispatchedSync($command, $callback = null)
        {
            /** @var BusFake $instance */
            return $instance->dispatchedSync($command, $callback);
        }

        /**
         * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function dispatchedAfterResponse($command, $callback = null)
        {
            /** @var BusFake $instance */
            return $instance->dispatchedAfterResponse($command, $callback);
        }

        /**
         * Get all of the pending batches matching a truth-test callback.
         *
         * @param callable $callback
         * @return Collection
         * @static
         */
        public static function batched($callback)
        {
            /** @var BusFake $instance */
            return $instance->batched($callback);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool
         * @static
         */
        public static function hasDispatched($command)
        {
            /** @var BusFake $instance */
            return $instance->hasDispatched($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool
         * @static
         */
        public static function hasDispatchedSync($command)
        {
            /** @var BusFake $instance */
            return $instance->hasDispatchedSync($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool
         * @static
         */
        public static function hasDispatchedAfterResponse($command)
        {
            /** @var BusFake $instance */
            return $instance->hasDispatchedAfterResponse($command);
        }

        /**
         * Record the fake pending batch dispatch.
         *
         * @param PendingBatch $pendingBatch
         * @return Batch
         * @static
         */
        public static function recordPendingBatch($pendingBatch)
        {
            /** @var BusFake $instance */
            return $instance->recordPendingBatch($pendingBatch);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Cache\CacheManager
     * @see \Illuminate\Cache\Repository
     */
    class Cache
    {
        /**
         * Get a cache store instance by name, wrapped in a repository.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static function store($name = null)
        {
            /** @var CacheManager $instance */
            return $instance->store($name);
        }

        /**
         * Get a cache driver instance.
         *
         * @param string|null $driver
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var CacheManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static function repository($store)
        {
            /** @var CacheManager $instance */
            return $instance->repository($store);
        }

        /**
         * Re-set the event dispatcher on all resolved cache repositories.
         *
         * @return void
         * @static
         */
        public static function refreshEventDispatcher()
        {
            /** @var CacheManager $instance */
            $instance->refreshEventDispatcher();
        }

        /**
         * Get the default cache driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var CacheManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var CacheManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Unset the given driver instances.
         *
         * @param array|string|null $name
         * @return CacheManager
         * @static
         */
        public static function forgetDriver($name = null)
        {
            /** @var CacheManager $instance */
            return $instance->forgetDriver($name);
        }

        /**
         * Disconnect the given driver and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var CacheManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return CacheManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var CacheManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->missing($key);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->get($key, $default);
        }

        /**
         * Retrieve multiple items from the cache by key.
         *
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function many($keys)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->many($keys);
        }

        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static
         */
        public static function getMultiple($keys, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getMultiple($keys, $default);
        }

        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function pull($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->pull($key, $default);
        }

        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param DateTimeInterface|DateInterval|int|null $ttl
         * @return bool
         * @static
         */
        public static function put($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->put($key, $value, $ttl);
        }

        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static
         */
        public static function set($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->set($key, $value, $ttl);
        }

        /**
         * Store multiple items in the cache for a given number of seconds.
         *
         * @param array $values
         * @param DateTimeInterface|DateInterval|int|null $ttl
         * @return bool
         * @static
         */
        public static function putMany($values, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->putMany($values, $ttl);
        }

        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static
         */
        public static function setMultiple($values, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setMultiple($values, $ttl);
        }

        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param DateTimeInterface|DateInterval|int|null $ttl
         * @return bool
         * @static
         */
        public static function add($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->add($key, $value, $ttl);
        }

        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool
         * @static
         */
        public static function increment($key, $value = 1)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->increment($key, $value);
        }

        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool
         * @static
         */
        public static function decrement($key, $value = 1)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->decrement($key, $value);
        }

        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return bool
         * @static
         */
        public static function forever($key, $value)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forever($key, $value);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @param string $key
         * @param DateTimeInterface|DateInterval|int|null $ttl
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function remember($key, $ttl, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->remember($key, $ttl, $callback);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @param string $key
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function sear($key, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->sear($key, $callback);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @param string $key
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function rememberForever($key, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->rememberForever($key, $callback);
        }

        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function forget($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forget($key);
        }

        /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static
         */
        public static function delete($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->delete($key);
        }

        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static
         */
        public static function deleteMultiple($keys)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->deleteMultiple($keys);
        }

        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static
         */
        public static function clear()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->clear();
        }

        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return TaggedCache
         * @throws BadMethodCallException
         * @static
         */
        public static function tags($names)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->tags($names);
        }

        /**
         * Determine if the current store supports tags.
         *
         * @return bool
         * @static
         */
        public static function supportsTags()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->supportsTags();
        }

        /**
         * Get the default cache time.
         *
         * @return int|null
         * @static
         */
        public static function getDefaultCacheTime()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getDefaultCacheTime();
        }

        /**
         * Set the default cache time in seconds.
         *
         * @param int|null $seconds
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static function setDefaultCacheTime($seconds)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setDefaultCacheTime($seconds);
        }

        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store
         * @static
         */
        public static function getStore()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getStore();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return Dispatcher
         * @static
         */
        public static function getEventDispatcher()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getEventDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param Dispatcher $events
         * @return void
         * @static
         */
        public static function setEventDispatcher($events)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->setEventDispatcher($events);
        }

        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->offsetSet($key, $value);
        }

        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->offsetUnset($key);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Cache\Repository::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         * Remove all items from the cache.
         *
         * @return bool
         * @static
         */
        public static function flush()
        {
            /** @var FileStore $instance */
            return $instance->flush();
        }

        /**
         * Get the Filesystem instance.
         *
         * @return Filesystem
         * @static
         */
        public static function getFilesystem()
        {
            /** @var FileStore $instance */
            return $instance->getFilesystem();
        }

        /**
         * Get the working directory of the cache.
         *
         * @return string
         * @static
         */
        public static function getDirectory()
        {
            /** @var FileStore $instance */
            return $instance->getDirectory();
        }

        /**
         * Get the cache key prefix.
         *
         * @return string
         * @static
         */
        public static function getPrefix()
        {
            /** @var FileStore $instance */
            return $instance->getPrefix();
        }

        /**
         * Get a lock instance.
         *
         * @param string $name
         * @param int $seconds
         * @param string|null $owner
         * @return Lock
         * @static
         */
        public static function lock($name, $seconds = 0, $owner = null)
        {
            /** @var FileStore $instance */
            return $instance->lock($name, $seconds, $owner);
        }

        /**
         * Restore a lock instance using the owner identifier.
         *
         * @param string $name
         * @param string $owner
         * @return Lock
         * @static
         */
        public static function restoreLock($name, $owner)
        {
            /** @var FileStore $instance */
            return $instance->restoreLock($name, $owner);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Config\Repository
     */
    class Config
    {
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var Repository $instance */
            return $instance->has($key);
        }

        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var Repository $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function getMany($keys)
        {
            /** @var Repository $instance */
            return $instance->getMany($keys);
        }

        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function set($key, $value = null)
        {
            /** @var Repository $instance */
            $instance->set($key, $value);
        }

        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function prepend($key, $value)
        {
            /** @var Repository $instance */
            $instance->prepend($key, $value);
        }

        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var Repository $instance */
            $instance->push($key, $value);
        }

        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var Repository $instance */
            return $instance->all();
        }

        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key)
        {
            /** @var Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key)
        {
            /** @var Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value)
        {
            /** @var Repository $instance */
            $instance->offsetSet($key, $value);
        }

        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key)
        {
            /** @var Repository $instance */
            $instance->offsetUnset($key);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Cookie\CookieJar
     */
    class Cookie
    {
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            /** @var CookieJar $instance */
            return $instance->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }

        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            /** @var CookieJar $instance */
            return $instance->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }

        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function forget($name, $path = null, $domain = null)
        {
            /** @var CookieJar $instance */
            return $instance->forget($name, $path, $domain);
        }

        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @param string|null $path
         * @return bool
         * @static
         */
        public static function hasQueued($key, $path = null)
        {
            /** @var CookieJar $instance */
            return $instance->hasQueued($key, $path);
        }

        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @param string|null $path
         * @return \Symfony\Component\HttpFoundation\Cookie|null
         * @static
         */
        public static function queued($key, $default = null, $path = null)
        {
            /** @var CookieJar $instance */
            return $instance->queued($key, $default, $path);
        }

        /**
         * Queue a cookie to send with the next response.
         *
         * @param array $parameters
         * @return void
         * @static
         */
        public static function queue(...$parameters)
        {
            /** @var CookieJar $instance */
            $instance->queue(...$parameters);
        }

        /**
         * Queue a cookie to expire with the next response.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return void
         * @static
         */
        public static function expire($name, $path = null, $domain = null)
        {
            /** @var CookieJar $instance */
            $instance->expire($name, $path, $domain);
        }

        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @param string|null $path
         * @return void
         * @static
         */
        public static function unqueue($name, $path = null)
        {
            /** @var CookieJar $instance */
            $instance->unqueue($name, $path);
        }

        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param string|null $sameSite
         * @return CookieJar
         * @static
         */
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            /** @var CookieJar $instance */
            return $instance->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }

        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[]
         * @static
         */
        public static function getQueuedCookies()
        {
            /** @var CookieJar $instance */
            return $instance->getQueuedCookies();
        }

        /**
         * Flush the cookies which have been queued for the next request.
         *
         * @return CookieJar
         * @static
         */
        public static function flushQueuedCookies()
        {
            /** @var CookieJar $instance */
            return $instance->flushQueuedCookies();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            CookieJar::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            CookieJar::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return CookieJar::hasMacro($name);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Encryption\Encrypter
     */
    class Crypt
    {
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool
         * @static
         */
        public static function supported($key, $cipher)
        {
            return Encrypter::supported($key, $cipher);
        }

        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string
         * @static
         */
        public static function generateKey($cipher)
        {
            return Encrypter::generateKey($cipher);
        }

        /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string
         * @throws EncryptException
         * @static
         */
        public static function encrypt($value, $serialize = true)
        {
            /** @var Encrypter $instance */
            return $instance->encrypt($value, $serialize);
        }

        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string
         * @throws EncryptException
         * @static
         */
        public static function encryptString($value)
        {
            /** @var Encrypter $instance */
            return $instance->encryptString($value);
        }

        /**
         * Decrypt the given value.
         *
         * @param string $payload
         * @param bool $unserialize
         * @return mixed
         * @throws DecryptException
         * @static
         */
        public static function decrypt($payload, $unserialize = true)
        {
            /** @var Encrypter $instance */
            return $instance->decrypt($payload, $unserialize);
        }

        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string
         * @throws DecryptException
         * @static
         */
        public static function decryptString($payload)
        {
            /** @var Encrypter $instance */
            return $instance->decryptString($payload);
        }

        /**
         * Get the encryption key.
         *
         * @return string
         * @static
         */
        public static function getKey()
        {
            /** @var Encrypter $instance */
            return $instance->getKey();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Database\DatabaseManager
     * @see \Illuminate\Database\Connection
     */
    class DB
    {
        /**
         * Get a database connection instance.
         *
         * @param string|null $name
         * @return Connection
         * @static
         */
        public static function connection($name = null)
        {
            /** @var DatabaseManager $instance */
            return $instance->connection($name);
        }

        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var DatabaseManager $instance */
            $instance->purge($name);
        }

        /**
         * Disconnect from the given database.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function disconnect($name = null)
        {
            /** @var DatabaseManager $instance */
            $instance->disconnect($name);
        }

        /**
         * Reconnect to the given database.
         *
         * @param string|null $name
         * @return Connection
         * @static
         */
        public static function reconnect($name = null)
        {
            /** @var DatabaseManager $instance */
            return $instance->reconnect($name);
        }

        /**
         * Set the default database connection for the callback execution.
         *
         * @param string $name
         * @param callable $callback
         * @return mixed
         * @static
         */
        public static function usingConnection($name, $callback)
        {
            /** @var DatabaseManager $instance */
            return $instance->usingConnection($name, $callback);
        }

        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
        public static function getDefaultConnection()
        {
            /** @var DatabaseManager $instance */
            return $instance->getDefaultConnection();
        }

        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultConnection($name)
        {
            /** @var DatabaseManager $instance */
            $instance->setDefaultConnection($name);
        }

        /**
         * Get all of the support drivers.
         *
         * @return array
         * @static
         */
        public static function supportedDrivers()
        {
            /** @var DatabaseManager $instance */
            return $instance->supportedDrivers();
        }

        /**
         * Get all of the drivers that are actually available.
         *
         * @return array
         * @static
         */
        public static function availableDrivers()
        {
            /** @var DatabaseManager $instance */
            return $instance->availableDrivers();
        }

        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void
         * @static
         */
        public static function extend($name, $resolver)
        {
            /** @var DatabaseManager $instance */
            $instance->extend($name, $resolver);
        }

        /**
         * Return all of the created connections.
         *
         * @return array
         * @static
         */
        public static function getConnections()
        {
            /** @var DatabaseManager $instance */
            return $instance->getConnections();
        }

        /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         * @return void
         * @static
         */
        public static function setReconnector($reconnector)
        {
            /** @var DatabaseManager $instance */
            $instance->setReconnector($reconnector);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param Application $app
         * @return DatabaseManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var DatabaseManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Determine if the connected database is a MariaDB database.
         *
         * @return bool
         * @static
         */
        public static function isMaria()
        {
            /** @var MySqlConnection $instance */
            return $instance->isMaria();
        }

        /**
         * Get a schema builder instance for the connection.
         *
         * @return MySqlBuilder
         * @static
         */
        public static function getSchemaBuilder()
        {
            /** @var MySqlConnection $instance */
            return $instance->getSchemaBuilder();
        }

        /**
         * Get the schema state for the connection.
         *
         * @param Filesystem|null $files
         * @param callable|null $processFactory
         * @return MySqlSchemaState
         * @static
         */
        public static function getSchemaState($files = null, $processFactory = null)
        {
            /** @var MySqlConnection $instance */
            return $instance->getSchemaState($files, $processFactory);
        }

        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->useDefaultQueryGrammar();
        }

        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->useDefaultSchemaGrammar();
        }

        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->useDefaultPostProcessor();
        }

        /**
         * Begin a fluent query against a database table.
         *
         * @param Closure|Builder|string $table
         * @param string|null $as
         * @return Builder
         * @static
         */
        public static function table($table, $as = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->table($table, $as);
        }

        /**
         * Get a new query builder instance.
         *
         * @return Builder
         * @static
         */
        public static function query()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->query();
        }

        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed
         * @static
         */
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->selectOne($query, $bindings, $useReadPdo);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array
         * @static
         */
        public static function selectFromWriteConnection($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->selectFromWriteConnection($query, $bindings);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array
         * @static
         */
        public static function select($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->select($query, $bindings, $useReadPdo);
        }

        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return Generator
         * @static
         */
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->cursor($query, $bindings, $useReadPdo);
        }

        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function insert($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->insert($query, $bindings);
        }

        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function update($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->update($query, $bindings);
        }

        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function delete($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->delete($query, $bindings);
        }

        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function statement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->statement($query, $bindings);
        }

        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function affectingStatement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->affectingStatement($query, $bindings);
        }

        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool
         * @static
         */
        public static function unprepared($query)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->unprepared($query);
        }

        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param Closure $callback
         * @return array
         * @static
         */
        public static function pretend($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->pretend($callback);
        }

        /**
         * Bind values to their parameters in the given statement.
         *
         * @param PDOStatement $statement
         * @param array $bindings
         * @return void
         * @static
         */
        public static function bindValues($statement, $bindings)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->bindValues($statement, $bindings);
        }

        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function prepareBindings($bindings)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->prepareBindings($bindings);
        }

        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void
         * @static
         */
        public static function logQuery($query, $bindings, $time = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->logQuery($query, $bindings, $time);
        }

        /**
         * Register a database query listener with the connection.
         *
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function listen($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->listen($callback);
        }

        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return Expression
         * @static
         */
        public static function raw($value)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->raw($value);
        }

        /**
         * Determine if the database connection has modified any database records.
         *
         * @return bool
         * @static
         */
        public static function hasModifiedRecords()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->hasModifiedRecords();
        }

        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void
         * @static
         */
        public static function recordsHaveBeenModified($value = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->recordsHaveBeenModified($value);
        }

        /**
         * Set the record modification state.
         *
         * @param bool $value
         * @return MySqlConnection
         * @static
         */
        public static function setRecordModificationState($value)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setRecordModificationState($value);
        }

        /**
         * Reset the record modification state.
         *
         * @return void
         * @static
         */
        public static function forgetRecordModificationState()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->forgetRecordModificationState();
        }

        /**
         * Indicate that the connection should use the write PDO connection for reads.
         *
         * @param bool $value
         * @return MySqlConnection
         * @static
         */
        public static function useWriteConnectionWhenReading($value = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->useWriteConnectionWhenReading($value);
        }

        /**
         * Is Doctrine available?
         *
         * @return bool
         * @static
         */
        public static function isDoctrineAvailable()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->isDoctrineAvailable();
        }

        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return Column
         * @static
         */
        public static function getDoctrineColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getDoctrineColumn($table, $column);
        }

        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return AbstractSchemaManager
         * @static
         */
        public static function getDoctrineSchemaManager()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getDoctrineSchemaManager();
        }

        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection
         * @static
         */
        public static function getDoctrineConnection()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getDoctrineConnection();
        }

        /**
         * Get the current PDO connection.
         *
         * @return PDO
         * @static
         */
        public static function getPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getPdo();
        }

        /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return PDO|Closure|null
         * @static
         */
        public static function getRawPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getRawPdo();
        }

        /**
         * Get the current PDO connection used for reading.
         *
         * @return PDO
         * @static
         */
        public static function getReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getReadPdo();
        }

        /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return PDO|Closure|null
         * @static
         */
        public static function getRawReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getRawReadPdo();
        }

        /**
         * Set the PDO connection.
         *
         * @param PDO|Closure|null $pdo
         * @return MySqlConnection
         * @static
         */
        public static function setPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setPdo($pdo);
        }

        /**
         * Set the PDO connection used for reading.
         *
         * @param PDO|Closure|null $pdo
         * @return MySqlConnection
         * @static
         */
        public static function setReadPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setReadPdo($pdo);
        }

        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static function getName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getName();
        }

        /**
         * Get the database connection full name.
         *
         * @return string|null
         * @static
         */
        public static function getNameWithReadWriteType()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getNameWithReadWriteType();
        }

        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed
         * @static
         */
        public static function getConfig($option = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getConfig($option);
        }

        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static function getDriverName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getDriverName();
        }

        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getQueryGrammar();
        }

        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return MySqlConnection
         * @static
         */
        public static function setQueryGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setQueryGrammar($grammar);
        }

        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */
        public static function getSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getSchemaGrammar();
        }

        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return MySqlConnection
         * @static
         */
        public static function setSchemaGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setSchemaGrammar($grammar);
        }

        /**
         * Get the query post processor used by the connection.
         *
         * @return Processor
         * @static
         */
        public static function getPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getPostProcessor();
        }

        /**
         * Set the query post processor used by the connection.
         *
         * @param Processor $processor
         * @return MySqlConnection
         * @static
         */
        public static function setPostProcessor($processor)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setPostProcessor($processor);
        }

        /**
         * Get the event dispatcher used by the connection.
         *
         * @return Dispatcher
         * @static
         */
        public static function getEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getEventDispatcher();
        }

        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param Dispatcher $events
         * @return MySqlConnection
         * @static
         */
        public static function setEventDispatcher($events)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setEventDispatcher($events);
        }

        /**
         * Unset the event dispatcher for this connection.
         *
         * @return void
         * @static
         */
        public static function unsetEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->unsetEventDispatcher();
        }

        /**
         * Set the transaction manager instance on the connection.
         *
         * @param DatabaseTransactionsManager $manager
         * @return MySqlConnection
         * @static
         */
        public static function setTransactionManager($manager)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setTransactionManager($manager);
        }

        /**
         * Unset the transaction manager for this connection.
         *
         * @return void
         * @static
         */
        public static function unsetTransactionManager()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->unsetTransactionManager();
        }

        /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool
         * @static
         */
        public static function pretending()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->pretending();
        }

        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */
        public static function getQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getQueryLog();
        }

        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static function flushQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->flushQueryLog();
        }

        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function enableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->enableQueryLog();
        }

        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function disableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->disableQueryLog();
        }

        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static function logging()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->logging();
        }

        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static function getDatabaseName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getDatabaseName();
        }

        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return MySqlConnection
         * @static
         */
        public static function setDatabaseName($database)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setDatabaseName($database);
        }

        /**
         * Set the read / write type of the connection.
         *
         * @param string|null $readWriteType
         * @return MySqlConnection
         * @static
         */
        public static function setReadWriteType($readWriteType)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setReadWriteType($readWriteType);
        }

        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static function getTablePrefix()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->getTablePrefix();
        }

        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return MySqlConnection
         * @static
         */
        public static function setTablePrefix($prefix)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->setTablePrefix($prefix);
        }

        /**
         * Set the table prefix and return the grammar.
         *
         * @param Grammar $grammar
         * @return Grammar
         * @static
         */
        public static function withTablePrefix($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->withTablePrefix($grammar);
        }

        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function resolverFor($driver, $callback)
        {            //Method inherited from \Illuminate\Database\Connection
            MySqlConnection::resolverFor($driver, $callback);
        }

        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed
         * @static
         */
        public static function getResolver($driver)
        {            //Method inherited from \Illuminate\Database\Connection
            return MySqlConnection::getResolver($driver);
        }

        /**
         * Execute a Closure within a transaction.
         *
         * @param Closure $callback
         * @param int $attempts
         * @return mixed
         * @throws Throwable
         * @static
         */
        public static function transaction($callback, $attempts = 1)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->transaction($callback, $attempts);
        }

        /**
         * Start a new database transaction.
         *
         * @return void
         * @throws Throwable
         * @static
         */
        public static function beginTransaction()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->beginTransaction();
        }

        /**
         * Commit the active database transaction.
         *
         * @return void
         * @throws Throwable
         * @static
         */
        public static function commit()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->commit();
        }

        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void
         * @throws Throwable
         * @static
         */
        public static function rollBack($toLevel = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->rollBack($toLevel);
        }

        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static function transactionLevel()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            return $instance->transactionLevel();
        }

        /**
         * Execute the callback after a transaction commits.
         *
         * @param callable $callback
         * @return void
         * @throws RuntimeException
         * @static
         */
        public static function afterCommit($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var MySqlConnection $instance */
            $instance->afterCommit($callback);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Events\Dispatcher
     */
    class Event
    {
        /**
         * Register an event listener with the dispatcher.
         *
         * @param Closure|string|array $events
         * @param Closure|string|array|null $listener
         * @return void
         * @static
         */
        public static function listen($events, $listener = null)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->listen($events, $listener);
        }

        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool
         * @static
         */
        public static function hasListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasListeners($eventName);
        }

        /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param string $eventName
         * @return bool
         * @static
         */
        public static function hasWildcardListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasWildcardListeners($eventName);
        }

        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void
         * @static
         */
        public static function push($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->push($event, $payload);
        }

        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function flush($event)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->flush($event);
        }

        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void
         * @static
         */
        public static function subscribe($subscriber)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->subscribe($subscriber);
        }

        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null
         * @static
         */
        public static function until($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->until($event, $payload);
        }

        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null
         * @static
         */
        public static function dispatch($event, $payload = [], $halt = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->dispatch($event, $payload, $halt);
        }

        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array
         * @static
         */
        public static function getListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getListeners($eventName);
        }

        /**
         * Register an event listener with the dispatcher.
         *
         * @param Closure|string|array $listener
         * @param bool $wildcard
         * @return Closure
         * @static
         */
        public static function makeListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->makeListener($listener, $wildcard);
        }

        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return Closure
         * @static
         */
        public static function createClassListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->createClassListener($listener, $wildcard);
        }

        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function forget($event)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forget($event);
        }

        /**
         * Forget all of the pushed listeners.
         *
         * @return void
         * @static
         */
        public static function forgetPushed()
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forgetPushed();
        }

        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static function setQueueResolver($resolver)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setQueueResolver($resolver);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Events\Dispatcher::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Events\Dispatcher::hasMacro($name);
        }

        /**
         * Assert if an event has a listener attached to it.
         *
         * @param string $expectedEvent
         * @param string $expectedListener
         * @return void
         * @static
         */
        public static function assertListening($expectedEvent, $expectedListener)
        {
            /** @var EventFake $instance */
            $instance->assertListening($expectedEvent, $expectedListener);
        }

        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string|Closure $event
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatched($event, $callback = null)
        {
            /** @var EventFake $instance */
            $instance->assertDispatched($event, $callback);
        }

        /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedTimes($event, $times = 1)
        {
            /** @var EventFake $instance */
            $instance->assertDispatchedTimes($event, $times);
        }

        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string|Closure $event
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatched($event, $callback = null)
        {
            /** @var EventFake $instance */
            $instance->assertNotDispatched($event, $callback);
        }

        /**
         * Assert that no events were dispatched.
         *
         * @return void
         * @static
         */
        public static function assertNothingDispatched()
        {
            /** @var EventFake $instance */
            $instance->assertNothingDispatched();
        }

        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function dispatched($event, $callback = null)
        {
            /** @var EventFake $instance */
            return $instance->dispatched($event, $callback);
        }

        /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool
         * @static
         */
        public static function hasDispatched($event)
        {
            /** @var EventFake $instance */
            return $instance->hasDispatched($event);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Filesystem\Filesystem
     */
    class File
    {
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var Filesystem $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var Filesystem $instance */
            return $instance->missing($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string
         * @throws FileNotFoundException
         * @static
         */
        public static function get($path, $lock = false)
        {
            /** @var Filesystem $instance */
            return $instance->get($path, $lock);
        }

        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function sharedGet($path)
        {
            /** @var Filesystem $instance */
            return $instance->sharedGet($path);
        }

        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @param array $data
         * @return mixed
         * @throws FileNotFoundException
         * @static
         */
        public static function getRequire($path, $data = [])
        {
            /** @var Filesystem $instance */
            return $instance->getRequire($path, $data);
        }

        /**
         * Require the given file once.
         *
         * @param string $path
         * @param array $data
         * @return mixed
         * @throws FileNotFoundException
         * @static
         */
        public static function requireOnce($path, $data = [])
        {
            /** @var Filesystem $instance */
            return $instance->requireOnce($path, $data);
        }

        /**
         * Get the contents of a file one line at a time.
         *
         * @param string $path
         * @return LazyCollection
         * @throws FileNotFoundException
         * @static
         */
        public static function lines($path)
        {
            /** @var Filesystem $instance */
            return $instance->lines($path);
        }

        /**
         * Get the MD5 hash of the file at the given path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function hash($path)
        {
            /** @var Filesystem $instance */
            return $instance->hash($path);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int|bool
         * @static
         */
        public static function put($path, $contents, $lock = false)
        {
            /** @var Filesystem $instance */
            return $instance->put($path, $contents, $lock);
        }

        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @return void
         * @static
         */
        public static function replace($path, $content)
        {
            /** @var Filesystem $instance */
            $instance->replace($path, $content);
        }

        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string $path
         * @return void
         * @static
         */
        public static function replaceInFile($search, $replace, $path)
        {
            /** @var Filesystem $instance */
            $instance->replaceInFile($search, $replace, $path);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function prepend($path, $data)
        {
            /** @var Filesystem $instance */
            return $instance->prepend($path, $data);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function append($path, $data)
        {
            /** @var Filesystem $instance */
            return $instance->append($path, $data);
        }

        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         * @return mixed
         * @static
         */
        public static function chmod($path, $mode = null)
        {
            /** @var Filesystem $instance */
            return $instance->chmod($path, $mode);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var Filesystem $instance */
            return $instance->delete($paths);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function move($path, $target)
        {
            /** @var Filesystem $instance */
            return $instance->move($path, $target);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function copy($path, $target)
        {
            /** @var Filesystem $instance */
            return $instance->copy($path, $target);
        }

        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         * @return void
         * @static
         */
        public static function link($target, $link)
        {
            /** @var Filesystem $instance */
            $instance->link($target, $link);
        }

        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @return void
         * @throws RuntimeException
         * @static
         */
        public static function relativeLink($target, $link)
        {
            /** @var Filesystem $instance */
            $instance->relativeLink($target, $link);
        }

        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function name($path)
        {
            /** @var Filesystem $instance */
            return $instance->name($path);
        }

        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function basename($path)
        {
            /** @var Filesystem $instance */
            return $instance->basename($path);
        }

        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function dirname($path)
        {
            /** @var Filesystem $instance */
            return $instance->dirname($path);
        }

        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function extension($path)
        {
            /** @var Filesystem $instance */
            return $instance->extension($path);
        }

        /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param string $path
         * @return string|null
         * @throws RuntimeException
         * @static
         */
        public static function guessExtension($path)
        {
            /** @var Filesystem $instance */
            return $instance->guessExtension($path);
        }

        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function type($path)
        {
            /** @var Filesystem $instance */
            return $instance->type($path);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var Filesystem $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var Filesystem $instance */
            return $instance->size($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var Filesystem $instance */
            return $instance->lastModified($path);
        }

        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function isDirectory($directory)
        {
            /** @var Filesystem $instance */
            return $instance->isDirectory($directory);
        }

        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isReadable($path)
        {
            /** @var Filesystem $instance */
            return $instance->isReadable($path);
        }

        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isWritable($path)
        {
            /** @var Filesystem $instance */
            return $instance->isWritable($path);
        }

        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool
         * @static
         */
        public static function isFile($file)
        {
            /** @var Filesystem $instance */
            return $instance->isFile($file);
        }

        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array
         * @static
         */
        public static function glob($pattern, $flags = 0)
        {
            /** @var Filesystem $instance */
            return $instance->glob($pattern, $flags);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function files($directory, $hidden = false)
        {
            /** @var Filesystem $instance */
            return $instance->files($directory, $hidden);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function allFiles($directory, $hidden = false)
        {
            /** @var Filesystem $instance */
            return $instance->allFiles($directory, $hidden);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array
         * @static
         */
        public static function directories($directory)
        {
            /** @var Filesystem $instance */
            return $instance->directories($directory);
        }

        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @return void
         * @static
         */
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
            /** @var Filesystem $instance */
            $instance->ensureDirectoryExists($path, $mode, $recursive);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool
         * @static
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            /** @var Filesystem $instance */
            return $instance->makeDirectory($path, $mode, $recursive, $force);
        }

        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool
         * @static
         */
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            /** @var Filesystem $instance */
            return $instance->moveDirectory($from, $to, $overwrite);
        }

        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         * @return bool
         * @static
         */
        public static function copyDirectory($directory, $destination, $options = null)
        {
            /** @var Filesystem $instance */
            return $instance->copyDirectory($directory, $destination, $options);
        }

        /**
         * Recursively delete a directory.
         *
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory, $preserve = false)
        {
            /** @var Filesystem $instance */
            return $instance->deleteDirectory($directory, $preserve);
        }

        /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectories($directory)
        {
            /** @var Filesystem $instance */
            return $instance->deleteDirectories($directory);
        }

        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function cleanDirectory($directory)
        {
            /** @var Filesystem $instance */
            return $instance->cleanDirectory($directory);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            Filesystem::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            Filesystem::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return Filesystem::hasMacro($name);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Contracts\Auth\Access\Gate
     */
    class Gate
    {
        /**
         * Determine if a given ability has been defined.
         *
         * @param string|array $ability
         * @return bool
         * @static
         */
        public static function has($ability)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->has($ability);
        }

        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|string $callback
         * @return \Illuminate\Auth\Access\Gate
         * @throws InvalidArgumentException
         * @static
         */
        public static function define($ability, $callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->define($ability, $callback);
        }

        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
         * @param array|null $abilities
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function resource($name, $class, $abilities = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resource($name, $class, $abilities);
        }

        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function policy($class, $policy)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policy($class, $policy);
        }

        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function before($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->before($callback);
        }

        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function after($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->after($callback);
        }

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool
         * @static
         */
        public static function allows($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allows($ability, $arguments);
        }

        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool
         * @static
         */
        public static function denies($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denies($ability, $arguments);
        }

        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool
         * @static
         */
        public static function check($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->check($abilities, $arguments);
        }

        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool
         * @static
         */
        public static function any($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->any($abilities, $arguments);
        }

        /**
         * Determine if all of the given abilities should be denied for the current user.
         *
         * @param iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool
         * @static
         */
        public static function none($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->none($abilities, $arguments);
        }

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response
         * @throws AuthorizationException
         * @static
         */
        public static function authorize($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->authorize($ability, $arguments);
        }

        /**
         * Inspect the user for the given ability.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static function inspect($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->inspect($ability, $arguments);
        }

        /**
         * Get the raw result from the authorization callback.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return mixed
         * @throws AuthorizationException
         * @static
         */
        public static function raw($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->raw($ability, $arguments);
        }

        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @return mixed
         * @static
         */
        public static function getPolicyFor($class)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->getPolicyFor($class);
        }

        /**
         * Specify a callback to be used to guess policy names.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function guessPolicyNamesUsing($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->guessPolicyNamesUsing($callback);
        }

        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         * @return mixed
         * @throws BindingResolutionException
         * @static
         */
        public static function resolvePolicy($class)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resolvePolicy($class);
        }

        /**
         * Get a gate instance for the given user.
         *
         * @param Authenticatable|mixed $user
         * @return static
         * @static
         */
        public static function forUser($user)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->forUser($user);
        }

        /**
         * Get all of the defined abilities.
         *
         * @return array
         * @static
         */
        public static function abilities()
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->abilities();
        }

        /**
         * Get all of the defined policies.
         *
         * @return array
         * @static
         */
        public static function policies()
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policies();
        }

        /**
         * Set the container instance used by the gate.
         *
         * @param Container $container
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Hashing\HashManager
     */
    class Hash
    {
        /**
         * Create an instance of the Bcrypt hash Driver.
         *
         * @return BcryptHasher
         * @static
         */
        public static function createBcryptDriver()
        {
            /** @var HashManager $instance */
            return $instance->createBcryptDriver();
        }

        /**
         * Create an instance of the Argon2i hash Driver.
         *
         * @return ArgonHasher
         * @static
         */
        public static function createArgonDriver()
        {
            /** @var HashManager $instance */
            return $instance->createArgonDriver();
        }

        /**
         * Create an instance of the Argon2id hash Driver.
         *
         * @return Argon2IdHasher
         * @static
         */
        public static function createArgon2idDriver()
        {
            /** @var HashManager $instance */
            return $instance->createArgon2idDriver();
        }

        /**
         * Get information about the given hashed value.
         *
         * @param string $hashedValue
         * @return array
         * @static
         */
        public static function info($hashedValue)
        {
            /** @var HashManager $instance */
            return $instance->info($hashedValue);
        }

        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function make($value, $options = [])
        {
            /** @var HashManager $instance */
            return $instance->make($value, $options);
        }

        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool
         * @static
         */
        public static function check($value, $hashedValue, $options = [])
        {
            /** @var HashManager $instance */
            return $instance->check($value, $hashedValue, $options);
        }

        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool
         * @static
         */
        public static function needsRehash($hashedValue, $options = [])
        {
            /** @var HashManager $instance */
            return $instance->needsRehash($hashedValue, $options);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var HashManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed
         * @throws InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return HashManager
         * @static
         */
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return Container
         * @static
         */
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param Container $container
         * @return HashManager
         * @static
         */
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return HashManager
         * @static
         */
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->forgetDrivers();
        }

    }

    /**
     *
     *
     * @method static PendingRequest accept(string $contentType)
     * @method static PendingRequest acceptJson()
     * @method static PendingRequest asForm()
     * @method static PendingRequest asJson()
     * @method static PendingRequest asMultipart()
     * @method static PendingRequest async()
     * @method static PendingRequest attach(string|array $name, string $contents = '', string|null $filename = null, array $headers = [])
     * @method static PendingRequest baseUrl(string $url)
     * @method static PendingRequest beforeSending(callable $callback)
     * @method static PendingRequest bodyFormat(string $format)
     * @method static PendingRequest contentType(string $contentType)
     * @method static PendingRequest dd()
     * @method static PendingRequest dump()
     * @method static PendingRequest retry(int $times, int $sleep = 0)
     * @method static PendingRequest sink(string|resource $to)
     * @method static PendingRequest stub(callable $callback)
     * @method static PendingRequest timeout(int $seconds)
     * @method static PendingRequest withBasicAuth(string $username, string $password)
     * @method static PendingRequest withBody(resource|string $content, string $contentType)
     * @method static PendingRequest withCookies(array $cookies, string $domain)
     * @method static PendingRequest withDigestAuth(string $username, string $password)
     * @method static PendingRequest withHeaders(array $headers)
     * @method static PendingRequest withMiddleware(callable $middleware)
     * @method static PendingRequest withOptions(array $options)
     * @method static PendingRequest withToken(string $token, string $type = 'Bearer')
     * @method static PendingRequest withUserAgent(string $userAgent)
     * @method static PendingRequest withoutRedirecting()
     * @method static PendingRequest withoutVerifying()
     * @method static array pool(callable $callback)
     * @method static \Illuminate\Http\Client\Response delete(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response get(string $url, array|string|null $query = null)
     * @method static \Illuminate\Http\Client\Response head(string $url, array|string|null $query = null)
     * @method static \Illuminate\Http\Client\Response patch(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response post(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response put(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response send(string $method, string $url, array $options = [])
     * @see \Illuminate\Http\Client\Factory
     */
    class Http
    {
        /**
         * Create a new response instance for use during stubbing.
         *
         * @param array|string $body
         * @param int $status
         * @param array $headers
         * @return PromiseInterface
         * @static
         */
        public static function response($body = null, $status = 200, $headers = [])
        {
            return \Illuminate\Http\Client\Factory::response($body, $status, $headers);
        }

        /**
         * Get an invokable object that returns a sequence of responses in order for use during stubbing.
         *
         * @param array $responses
         * @return ResponseSequence
         * @static
         */
        public static function sequence($responses = [])
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->sequence($responses);
        }

        /**
         * Register a stub callable that will intercept requests and be able to return stub responses.
         *
         * @param callable|array $callback
         * @return \Illuminate\Http\Client\Factory
         * @static
         */
        public static function fake($callback = null)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->fake($callback);
        }

        /**
         * Register a response sequence for the given URL pattern.
         *
         * @param string $url
         * @return ResponseSequence
         * @static
         */
        public static function fakeSequence($url = '*')
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->fakeSequence($url);
        }

        /**
         * Stub the given URL using the given callback.
         *
         * @param string $url
         * @param \Illuminate\Http\Client\Response|PromiseInterface|callable $callback
         * @return \Illuminate\Http\Client\Factory
         * @static
         */
        public static function stubUrl($url, $callback)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->stubUrl($url, $callback);
        }

        /**
         * Record a request response pair.
         *
         * @param \Illuminate\Http\Client\Request $request
         * @param \Illuminate\Http\Client\Response $response
         * @return void
         * @static
         */
        public static function recordRequestResponsePair($request, $response)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->recordRequestResponsePair($request, $response);
        }

        /**
         * Assert that a request / response pair was recorded matching a given truth test.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function assertSent($callback)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSent($callback);
        }

        /**
         * Assert that the given request was sent in the given order.
         *
         * @param array $callbacks
         * @return void
         * @static
         */
        public static function assertSentInOrder($callbacks)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSentInOrder($callbacks);
        }

        /**
         * Assert that a request / response pair was not recorded matching a given truth test.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function assertNotSent($callback)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertNotSent($callback);
        }

        /**
         * Assert that no request / response pair was recorded.
         *
         * @return void
         * @static
         */
        public static function assertNothingSent()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert how many requests have been recorded.
         *
         * @param int $count
         * @return void
         * @static
         */
        public static function assertSentCount($count)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSentCount($count);
        }

        /**
         * Assert that every created response sequence is empty.
         *
         * @return void
         * @static
         */
        public static function assertSequencesAreEmpty()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSequencesAreEmpty();
        }

        /**
         * Get a collection of the request / response pairs matching the given truth test.
         *
         * @param callable $callback
         * @return Collection
         * @static
         */
        public static function recorded($callback = null)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->recorded($callback);
        }

        /**
         * Get the current event dispatcher implementation.
         *
         * @return Dispatcher|null
         * @static
         */
        public static function getDispatcher()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->getDispatcher();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Client\Factory::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Http\Client\Factory::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Client\Factory::hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->macroCall($method, $parameters);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Translation\Translator
     */
    class Lang
    {
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool
         * @static
         */
        public static function hasForLocale($key, $locale = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->hasForLocale($key, $locale);
        }

        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool
         * @static
         */
        public static function has($key, $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->has($key, $locale, $fallback);
        }

        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array
         * @static
         */
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->get($key, $replace, $locale, $fallback);
        }

        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param Countable|int|array $number
         * @param array $replace
         * @param string|null $locale
         * @return string
         * @static
         */
        public static function choice($key, $number, $replace = [], $locale = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->choice($key, $number, $replace, $locale);
        }

        /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void
         * @static
         */
        public static function addLines($lines, $locale, $namespace = '*')
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addLines($lines, $locale, $namespace);
        }

        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void
         * @static
         */
        public static function load($namespace, $group, $locale)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->load($namespace, $group, $locale);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void
         * @static
         */
        public static function addNamespace($namespace, $hint)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addNamespace($namespace, $hint);
        }

        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @return void
         * @static
         */
        public static function addJsonPath($path)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addJsonPath($path);
        }

        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array
         * @static
         */
        public static function parseKey($key)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->parseKey($key);
        }

        /**
         * Get the message selector instance.
         *
         * @return MessageSelector
         * @static
         */
        public static function getSelector()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getSelector();
        }

        /**
         * Set the message selector instance.
         *
         * @param MessageSelector $selector
         * @return void
         * @static
         */
        public static function setSelector($selector)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setSelector($selector);
        }

        /**
         * Get the language line loader implementation.
         *
         * @return Loader
         * @static
         */
        public static function getLoader()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLoader();
        }

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
        public static function locale()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->locale();
        }

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLocale();
        }

        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void
         * @throws InvalidArgumentException
         * @static
         */
        public static function setLocale($locale)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLocale($locale);
        }

        /**
         * Get the fallback locale being used.
         *
         * @return string
         * @static
         */
        public static function getFallback()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getFallback();
        }

        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void
         * @static
         */
        public static function setFallback($fallback)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setFallback($fallback);
        }

        /**
         * Set the loaded translation groups.
         *
         * @param array $loaded
         * @return void
         * @static
         */
        public static function setLoaded($loaded)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLoaded($loaded);
        }

        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void
         * @static
         */
        public static function setParsedKey($key, $parsed)
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setParsedKey($key, $parsed);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Translation\Translator::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Translation\Translator::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }

    }

    /**
     *
     *
     * @method static Logger withContext(array $context = [])
     * @method static Logger withoutContext()
     * @method static void write(string $level, string $message, array $context = [])
     * @method static void listen(Closure $callback)
     * @see \Illuminate\Log\Logger
     */
    class Log
    {
        /**
         * Create a new, on-demand aggregate logger instance.
         *
         * @param array $channels
         * @param string|null $channel
         * @return LoggerInterface
         * @static
         */
        public static function stack($channels, $channel = null)
        {
            /** @var LogManager $instance */
            return $instance->stack($channels, $channel);
        }

        /**
         * Get a log channel instance.
         *
         * @param string|null $channel
         * @return LoggerInterface
         * @static
         */
        public static function channel($channel = null)
        {
            /** @var LogManager $instance */
            return $instance->channel($channel);
        }

        /**
         * Get a log driver instance.
         *
         * @param string|null $driver
         * @return LoggerInterface
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var LogManager $instance */
            return $instance->driver($driver);
        }

        /**
         *
         *
         * @return array
         * @static
         */
        public static function getChannels()
        {
            /** @var LogManager $instance */
            return $instance->getChannels();
        }

        /**
         * Get the default log driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var LogManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default log driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var LogManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return LogManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var LogManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Unset the given channel instance.
         *
         * @param string|null $driver
         * @return LogManager
         * @static
         */
        public static function forgetChannel($driver = null)
        {
            /** @var LogManager $instance */
            return $instance->forgetChannel($driver);
        }

        /**
         * System is unusable.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function emergency($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->emergency($message, $context);
        }

        /**
         * Action must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function alert($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->alert($message, $context);
        }

        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function critical($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->critical($message, $context);
        }

        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function error($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->error($message, $context);
        }

        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function warning($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->warning($message, $context);
        }

        /**
         * Normal but significant events.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function notice($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->notice($message, $context);
        }

        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function info($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->info($message, $context);
        }

        /**
         * Detailed debug information.
         *
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function debug($message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->debug($message, $context);
        }

        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         * @return void
         * @static
         */
        public static function log($level, $message, $context = [])
        {
            /** @var LogManager $instance */
            $instance->log($level, $message, $context);
        }

    }

    /**
     *
     *
     * @method static mixed laterOn(string $queue, DateTimeInterface|DateInterval|int $delay, Mailable|string|array $view)
     * @method static mixed queueOn(string $queue, Mailable|string|array $view)
     * @method static void plain(string $view, array $data, $callback)
     * @method static void html(string $html, $callback)
     * @see \Illuminate\Mail\Mailer
     * @see \Illuminate\Support\Testing\Fakes\MailFake
     */
    class Mail
    {
        /**
         * Get a mailer instance by name.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Mail\Mailer
         * @static
         */
        public static function mailer($name = null)
        {
            /** @var MailManager $instance */
            return $instance->mailer($name);
        }

        /**
         * Get a mailer driver instance.
         *
         * @param string|null $driver
         * @return Mailer
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var MailManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Create a new transport instance.
         *
         * @param array $config
         * @return Swift_Transport
         * @throws InvalidArgumentException
         * @static
         */
        public static function createTransport($config)
        {
            /** @var MailManager $instance */
            return $instance->createTransport($config);
        }

        /**
         * Get the default mail driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var MailManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default mail driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var MailManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Disconnect the given mailer and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var MailManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom transport creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return MailManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var MailManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return Application
         * @static
         */
        public static function getApplication()
        {
            /** @var MailManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param Application $app
         * @return MailManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var MailManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Forget all of the resolved mailer instances.
         *
         * @return MailManager
         * @static
         */
        public static function forgetMailers()
        {
            /** @var MailManager $instance */
            return $instance->forgetMailers();
        }

        /**
         * Assert if a mailable was sent based on a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertSent($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            $instance->assertSent($mailable, $callback);
        }

        /**
         * Determine if a mailable was not sent or queued to be sent based on a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotOutgoing($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            $instance->assertNotOutgoing($mailable, $callback);
        }

        /**
         * Determine if a mailable was not sent based on a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotSent($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            $instance->assertNotSent($mailable, $callback);
        }

        /**
         * Assert that no mailables were sent or queued to be sent.
         *
         * @return void
         * @static
         */
        public static function assertNothingOutgoing()
        {
            /** @var MailFake $instance */
            $instance->assertNothingOutgoing();
        }

        /**
         * Assert that no mailables were sent.
         *
         * @return void
         * @static
         */
        public static function assertNothingSent()
        {
            /** @var MailFake $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert if a mailable was queued based on a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertQueued($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            $instance->assertQueued($mailable, $callback);
        }

        /**
         * Determine if a mailable was not queued based on a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotQueued($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            $instance->assertNotQueued($mailable, $callback);
        }

        /**
         * Assert that no mailables were queued.
         *
         * @return void
         * @static
         */
        public static function assertNothingQueued()
        {
            /** @var MailFake $instance */
            $instance->assertNothingQueued();
        }

        /**
         * Get all of the mailables matching a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function sent($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            return $instance->sent($mailable, $callback);
        }

        /**
         * Determine if the given mailable has been sent.
         *
         * @param string $mailable
         * @return bool
         * @static
         */
        public static function hasSent($mailable)
        {
            /** @var MailFake $instance */
            return $instance->hasSent($mailable);
        }

        /**
         * Get all of the queued mailables matching a truth-test callback.
         *
         * @param string|Closure $mailable
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function queued($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            return $instance->queued($mailable, $callback);
        }

        /**
         * Determine if the given mailable has been queued.
         *
         * @param string $mailable
         * @return bool
         * @static
         */
        public static function hasQueued($mailable)
        {
            /** @var MailFake $instance */
            return $instance->hasQueued($mailable);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return PendingMail
         * @static
         */
        public static function to($users)
        {
            /** @var MailFake $instance */
            return $instance->to($users);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return PendingMail
         * @static
         */
        public static function bcc($users)
        {
            /** @var MailFake $instance */
            return $instance->bcc($users);
        }

        /**
         * Send a new message with only a raw text part.
         *
         * @param string $text
         * @param Closure|string $callback
         * @return void
         * @static
         */
        public static function raw($text, $callback)
        {
            /** @var MailFake $instance */
            $instance->raw($text, $callback);
        }

        /**
         * Send a new message using a view.
         *
         * @param Mailable|string|array $view
         * @param array $data
         * @param Closure|string|null $callback
         * @return void
         * @static
         */
        public static function send($view, $data = [], $callback = null)
        {
            /** @var MailFake $instance */
            $instance->send($view, $data, $callback);
        }

        /**
         * Queue a new e-mail message for sending.
         *
         * @param Mailable|string|array $view
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function queue($view, $queue = null)
        {
            /** @var MailFake $instance */
            return $instance->queue($view, $queue);
        }

        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param DateTimeInterface|DateInterval|int $delay
         * @param Mailable|string|array $view
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function later($delay, $view, $queue = null)
        {
            /** @var MailFake $instance */
            return $instance->later($delay, $view, $queue);
        }

        /**
         * Get the array of failed recipients.
         *
         * @return array
         * @static
         */
        public static function failures()
        {
            /** @var MailFake $instance */
            return $instance->failures();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Notifications\ChannelManager
     */
    class Notification
    {
        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param Collection|array|mixed $notifiables
         * @param mixed $notification
         * @return void
         * @static
         */
        public static function send($notifiables, $notification)
        {
            /** @var ChannelManager $instance */
            $instance->send($notifiables, $notification);
        }

        /**
         * Send the given notification immediately.
         *
         * @param Collection|array|mixed $notifiables
         * @param mixed $notification
         * @param array|null $channels
         * @return void
         * @static
         */
        public static function sendNow($notifiables, $notification, $channels = null)
        {
            /** @var ChannelManager $instance */
            $instance->sendNow($notifiables, $notification, $channels);
        }

        /**
         * Get a channel instance.
         *
         * @param string|null $name
         * @return mixed
         * @static
         */
        public static function channel($name = null)
        {
            /** @var ChannelManager $instance */
            return $instance->channel($name);
        }

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var ChannelManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
        public static function deliversVia()
        {
            /** @var ChannelManager $instance */
            return $instance->deliversVia();
        }

        /**
         * Set the default channel driver name.
         *
         * @param string $channel
         * @return void
         * @static
         */
        public static function deliverVia($channel)
        {
            /** @var ChannelManager $instance */
            $instance->deliverVia($channel);
        }

        /**
         * Set the locale of notifications.
         *
         * @param string $locale
         * @return ChannelManager
         * @static
         */
        public static function locale($locale)
        {
            /** @var ChannelManager $instance */
            return $instance->locale($locale);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed
         * @throws InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return ChannelManager
         * @static
         */
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return Container
         * @static
         */
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param Container $container
         * @return ChannelManager
         * @static
         */
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return ChannelManager
         * @static
         */
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Assert if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|Closure $notification
         * @param callable|null $callback
         * @return void
         * @throws Exception
         * @static
         */
        public static function assertSentTo($notifiable, $notification, $callback = null)
        {
            /** @var NotificationFake $instance */
            $instance->assertSentTo($notifiable, $notification, $callback);
        }

        /**
         * Assert if a notification was sent a number of times.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param int $times
         * @return void
         * @static
         */
        public static function assertSentToTimes($notifiable, $notification, $times = 1)
        {
            /** @var NotificationFake $instance */
            $instance->assertSentToTimes($notifiable, $notification, $times);
        }

        /**
         * Determine if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|Closure $notification
         * @param callable|null $callback
         * @return void
         * @throws Exception
         * @static
         */
        public static function assertNotSentTo($notifiable, $notification, $callback = null)
        {
            /** @var NotificationFake $instance */
            $instance->assertNotSentTo($notifiable, $notification, $callback);
        }

        /**
         * Assert that no notifications were sent.
         *
         * @return void
         * @static
         */
        public static function assertNothingSent()
        {
            /** @var NotificationFake $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert the total amount of times a notification was sent.
         *
         * @param int $expectedCount
         * @param string $notification
         * @return void
         * @static
         */
        public static function assertTimesSent($expectedCount, $notification)
        {
            /** @var NotificationFake $instance */
            $instance->assertTimesSent($expectedCount, $notification);
        }

        /**
         * Get all of the notifications matching a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function sent($notifiable, $notification, $callback = null)
        {
            /** @var NotificationFake $instance */
            return $instance->sent($notifiable, $notification, $callback);
        }

        /**
         * Determine if there are more notifications left to inspect.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @return bool
         * @static
         */
        public static function hasSent($notifiable, $notification)
        {
            /** @var NotificationFake $instance */
            return $instance->hasSent($notifiable, $notification);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            NotificationFake::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            NotificationFake::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return NotificationFake::hasMacro($name);
        }

    }

    /**
     *
     *
     * @method static mixed reset(array $credentials, Closure $callback)
     * @method static string sendResetLink(array $credentials, Closure $callback = null)
     * @method static CanResetPassword getUser(array $credentials)
     * @method static string createToken(CanResetPassword $user)
     * @method static void deleteToken(CanResetPassword $user)
     * @method static bool tokenExists(CanResetPassword $user, string $token)
     * @method static TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBroker
     */
    class Password
    {
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string|null $name
         * @return PasswordBroker
         * @static
         */
        public static function broker($name = null)
        {
            /** @var PasswordBrokerManager $instance */
            return $instance->broker($name);
        }

        /**
         * Get the default password broker name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var PasswordBrokerManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default password broker name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var PasswordBrokerManager $instance */
            $instance->setDefaultDriver($name);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     */
    class Queue
    {
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function before($callback)
        {
            /** @var QueueManager $instance */
            $instance->before($callback);
        }

        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function after($callback)
        {
            /** @var QueueManager $instance */
            $instance->after($callback);
        }

        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function exceptionOccurred($callback)
        {
            /** @var QueueManager $instance */
            $instance->exceptionOccurred($callback);
        }

        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function looping($callback)
        {
            /** @var QueueManager $instance */
            $instance->looping($callback);
        }

        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function failing($callback)
        {
            /** @var QueueManager $instance */
            $instance->failing($callback);
        }

        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function stopping($callback)
        {
            /** @var QueueManager $instance */
            $instance->stopping($callback);
        }

        /**
         * Determine if the driver is connected.
         *
         * @param string|null $name
         * @return bool
         * @static
         */
        public static function connected($name = null)
        {
            /** @var QueueManager $instance */
            return $instance->connected($name);
        }

        /**
         * Resolve a queue connection instance.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Queue\Queue
         * @static
         */
        public static function connection($name = null)
        {
            /** @var QueueManager $instance */
            return $instance->connection($name);
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param Closure $resolver
         * @return void
         * @static
         */
        public static function extend($driver, $resolver)
        {
            /** @var QueueManager $instance */
            $instance->extend($driver, $resolver);
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param Closure $resolver
         * @return void
         * @static
         */
        public static function addConnector($driver, $resolver)
        {
            /** @var QueueManager $instance */
            $instance->addConnector($driver, $resolver);
        }

        /**
         * Get the name of the default queue connection.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var QueueManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var QueueManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get the full name for the given connection.
         *
         * @param string|null $connection
         * @return string
         * @static
         */
        public static function getName($connection = null)
        {
            /** @var QueueManager $instance */
            return $instance->getName($connection);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return Application
         * @static
         */
        public static function getApplication()
        {
            /** @var QueueManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param Application $app
         * @return QueueManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var QueueManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string|Closure $job
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertPushed($job, $callback = null)
        {
            /** @var QueueFake $instance */
            $instance->assertPushed($job, $callback);
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $queue
         * @param string|Closure $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedOn($queue, $job, $callback = null)
        {
            /** @var QueueFake $instance */
            $instance->assertPushedOn($queue, $job, $callback);
        }

        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string $job
         * @param array $expectedChain
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedWithChain($job, $expectedChain = [], $callback = null)
        {
            /** @var QueueFake $instance */
            $instance->assertPushedWithChain($job, $expectedChain, $callback);
        }

        /**
         * Assert if a job was pushed with an empty chain based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedWithoutChain($job, $callback = null)
        {
            /** @var QueueFake $instance */
            $instance->assertPushedWithoutChain($job, $callback);
        }

        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string|Closure $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotPushed($job, $callback = null)
        {
            /** @var QueueFake $instance */
            $instance->assertNotPushed($job, $callback);
        }

        /**
         * Assert that no jobs were pushed.
         *
         * @return void
         * @static
         */
        public static function assertNothingPushed()
        {
            /** @var QueueFake $instance */
            $instance->assertNothingPushed();
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return Collection
         * @static
         */
        public static function pushed($job, $callback = null)
        {
            /** @var QueueFake $instance */
            return $instance->pushed($job, $callback);
        }

        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         * @return bool
         * @static
         */
        public static function hasPushed($job)
        {
            /** @var QueueFake $instance */
            return $instance->hasPushed($job);
        }

        /**
         * Get the size of the queue.
         *
         * @param string|null $queue
         * @return int
         * @static
         */
        public static function size($queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->size($queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function push($job, $data = '', $queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->push($job, $data, $queue);
        }

        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string|null $queue
         * @param array $options
         * @return mixed
         * @static
         */
        public static function pushRaw($payload, $queue = null, $options = [])
        {
            /** @var QueueFake $instance */
            return $instance->pushRaw($payload, $queue, $options);
        }

        /**
         * Push a new job onto the queue after a delay.
         *
         * @param DateTimeInterface|DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function later($delay, $job, $data = '', $queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->later($delay, $job, $data, $queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed
         * @static
         */
        public static function pushOn($queue, $job, $data = '')
        {
            /** @var QueueFake $instance */
            return $instance->pushOn($queue, $job, $data);
        }

        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param DateTimeInterface|DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed
         * @static
         */
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            /** @var QueueFake $instance */
            return $instance->laterOn($queue, $delay, $job, $data);
        }

        /**
         * Pop the next job off of the queue.
         *
         * @param string|null $queue
         * @return Job|null
         * @static
         */
        public static function pop($queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->pop($queue);
        }

        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function bulk($jobs, $data = '', $queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->bulk($jobs, $data, $queue);
        }

        /**
         * Get the jobs that have been pushed.
         *
         * @return array
         * @static
         */
        public static function pushedJobs()
        {
            /** @var QueueFake $instance */
            return $instance->pushedJobs();
        }

        /**
         * Get the connection name for the queue.
         *
         * @return string
         * @static
         */
        public static function getConnectionName()
        {
            /** @var QueueFake $instance */
            return $instance->getConnectionName();
        }

        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return QueueFake
         * @static
         */
        public static function setConnectionName($name)
        {
            /** @var QueueFake $instance */
            return $instance->setConnectionName($name);
        }

        /**
         * Get the backoff for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobBackoff($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var SyncQueue $instance */
            return $instance->getJobBackoff($job);
        }

        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobExpiration($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var SyncQueue $instance */
            return $instance->getJobExpiration($job);
        }

        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function createPayloadUsing($callback)
        {            //Method inherited from \Illuminate\Queue\Queue
            SyncQueue::createPayloadUsing($callback);
        }

        /**
         * Get the container instance being used by the connection.
         *
         * @return \Illuminate\Container\Container
         * @static
         */
        public static function getContainer()
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var SyncQueue $instance */
            return $instance->getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void
         * @static
         */
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var SyncQueue $instance */
            $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Routing\Redirector
     */
    class Redirect
    {
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return RedirectResponse
         * @static
         */
        public static function home($status = 302)
        {
            /** @var Redirector $instance */
            return $instance->home($status);
        }

        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return RedirectResponse
         * @static
         */
        public static function back($status = 302, $headers = [], $fallback = false)
        {
            /** @var Redirector $instance */
            return $instance->back($status, $headers, $fallback);
        }

        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function refresh($status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->refresh($status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return RedirectResponse
         * @static
         */
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var Redirector $instance */
            return $instance->guest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return RedirectResponse
         * @static
         */
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var Redirector $instance */
            return $instance->intended($default, $status, $headers, $secure);
        }

        /**
         * Set the intended url.
         *
         * @param string $url
         * @return void
         * @static
         */
        public static function setIntendedUrl($url)
        {
            /** @var Redirector $instance */
            $instance->setIntendedUrl($url);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return RedirectResponse
         * @static
         */
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var Redirector $instance */
            return $instance->to($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function away($path, $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->away($path, $status, $headers);
        }

        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function secure($path, $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->secure($path, $status, $headers);
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->route($route, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param DateTimeInterface|DateInterval|int|null $expiration
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->signedRoute($route, $parameters, $expiration, $status, $headers);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param DateTimeInterface|DateInterval|int|null $expiration
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->temporarySignedRoute($route, $expiration, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->action($action, $parameters, $status, $headers);
        }

        /**
         * Get the URL generator instance.
         *
         * @return UrlGenerator
         * @static
         */
        public static function getUrlGenerator()
        {
            /** @var Redirector $instance */
            return $instance->getUrlGenerator();
        }

        /**
         * Set the active session store.
         *
         * @param Store $session
         * @return void
         * @static
         */
        public static function setSession($session)
        {
            /** @var Redirector $instance */
            $instance->setSession($session);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            Redirector::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            Redirector::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return Redirector::hasMacro($name);
        }

    }

    /**
     *
     *
     * @method static mixed filterFiles(mixed $files)
     * @see \Illuminate\Http\Request
     */
    class Request
    {
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static
         * @static
         */
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }

        /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function instance()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->instance();
        }

        /**
         * Get the request method.
         *
         * @return string
         * @static
         */
        public static function method()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->method();
        }

        /**
         * Get the root URL for the application.
         *
         * @return string
         * @static
         */
        public static function root()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->root();
        }

        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         * @static
         */
        public static function url()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->url();
        }

        /**
         * Get the full URL for the request.
         *
         * @return string
         * @static
         */
        public static function fullUrl()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrl();
        }

        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string
         * @static
         */
        public static function fullUrlWithQuery($query)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithQuery($query);
        }

        /**
         * Get the current path info for the request.
         *
         * @return string
         * @static
         */
        public static function path()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->path();
        }

        /**
         * Get the current decoded path info for the request.
         *
         * @return string
         * @static
         */
        public static function decodedPath()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->decodedPath();
        }

        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null
         * @static
         */
        public static function segment($index, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segment($index, $default);
        }

        /**
         * Get all of the segments for the request path.
         *
         * @return array
         * @static
         */
        public static function segments()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segments();
        }

        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function is(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->is(...$patterns);
        }

        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function routeIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->routeIs(...$patterns);
        }

        /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function fullUrlIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlIs(...$patterns);
        }

        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool
         * @static
         */
        public static function ajax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ajax();
        }

        /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool
         * @static
         */
        public static function pjax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->pjax();
        }

        /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool
         * @static
         */
        public static function prefetch()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefetch();
        }

        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool
         * @static
         */
        public static function secure()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->secure();
        }

        /**
         * Get the client IP address.
         *
         * @return string|null
         * @static
         */
        public static function ip()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ip();
        }

        /**
         * Get the client IP addresses.
         *
         * @return array
         * @static
         */
        public static function ips()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ips();
        }

        /**
         * Get the client user agent.
         *
         * @return string|null
         * @static
         */
        public static function userAgent()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->userAgent();
        }

        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function merge($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->merge($input);
        }

        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function replace($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->replace($input);
        }

        /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         *
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get the JSON payload for the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return ParameterBag|mixed
         * @static
         */
        public static function json($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->json($key, $default);
        }

        /**
         * Create a new request instance from the given Laravel request.
         *
         * @param \Illuminate\Http\Request $from
         * @param \Illuminate\Http\Request|null $to
         * @return static
         * @static
         */
        public static function createFrom($from, $to = null)
        {
            return \Illuminate\Http\Request::createFrom($from, $to);
        }

        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return static
         * @static
         */
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }

        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static
         * @static
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }

        /**
         * Get the session associated with the request.
         *
         * @return Store
         * @throws RuntimeException
         * @static
         */
        public static function session()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->session();
        }

        /**
         * Get the session associated with the request.
         *
         * @return Store|null
         * @static
         */
        public static function getSession()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSession();
        }

        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void
         * @static
         */
        public static function setLaravelSession($session)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setLaravelSession($session);
        }

        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed
         * @static
         */
        public static function user($guard = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->user($guard);
        }

        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @param mixed $default
         * @return \Illuminate\Routing\Route|object|string|null
         * @static
         */
        public static function route($param = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->route($param, $default);
        }

        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string
         * @throws RuntimeException
         * @static
         */
        public static function fingerprint()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fingerprint();
        }

        /**
         * Set the JSON payload for the request.
         *
         * @param ParameterBag $json
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setJson($json)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setJson($json);
        }

        /**
         * Get the user resolver callback.
         *
         * @return Closure
         * @static
         */
        public static function getUserResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserResolver();
        }

        /**
         * Set the user resolver callback.
         *
         * @param Closure $callback
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setUserResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setUserResolver($callback);
        }

        /**
         * Get the route resolver callback.
         *
         * @return Closure
         * @static
         */
        public static function getRouteResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRouteResolver();
        }

        /**
         * Set the route resolver callback.
         *
         * @param Closure $callback
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setRouteResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRouteResolver($callback);
        }

        /**
         * Get all of the input and files for the request.
         *
         * @return array
         * @static
         */
        public static function toArray()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->toArray();
        }

        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool
         * @static
         */
        public static function offsetExists($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed
         * @static
         */
        public static function offsetGet($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($offset, $value)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetSet($offset, $value);
        }

        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void
         * @static
         */
        public static function offsetUnset($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetUnset($offset);
        }

        /**
         * Sets the parameters for this request.
         *
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @static
         */
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }

        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static
         * @static
         */
        public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::createFromGlobals();
        }

        /**
         * Creates a Request based on a given URI and configuration.
         *
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @return static
         * @static
         */
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }

        /**
         * Sets a callable able to create a Request instance.
         *
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @static
         */
        public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setFactory($callable);
        }

        /**
         * Overrides the PHP global variables according to this request instance.
         *
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static
         */
        public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->overrideGlobals();
        }

        /**
         * Sets a list of trusted proxies.
         *
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with $_SERVER['REMOTE_ADDR']
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @static
         */
        public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }

        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static
         */
        public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedProxies();
        }

        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static
         */
        public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }

        /**
         * Sets a list of trusted host patterns.
         *
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static
         */
        public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }

        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static
         */
        public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHosts();
        }

        /**
         * Normalizes a query string.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @return string A normalized query string for the Request
         * @static
         */
        public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }

        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         *
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         *
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static
         */
        public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }

        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static
         */
        public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }

        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool
         * @static
         */
        public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasPreviousSession();
        }

        /**
         * Whether the request contains a Session object.
         *
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static
         */
        public static function hasSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasSession();
        }

        /**
         *
         *
         * @static
         */
        public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSession($session);
        }

        /**
         *
         *
         * @internal
         * @static
         */
        public static function setSessionFactory($factory)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSessionFactory($factory);
        }

        /**
         * Returns the client IP addresses.
         *
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         *
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static
         */
        public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIps();
        }

        /**
         * Returns the client IP address.
         *
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         *
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static
         */
        public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIp();
        }

        /**
         * Returns current script name.
         *
         * @return string
         * @static
         */
        public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScriptName();
        }

        /**
         * Returns the path being requested relative to the executed script.
         *
         * The path info always starts with a /.
         *
         * Suppose this request is instantiated from /mysite on localhost:
         *
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPathInfo();
        }

        /**
         * Returns the root path from which this request is executed.
         *
         * Suppose that an index.php file instantiates this request object:
         *
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBasePath();
        }

        /**
         * Returns the root URL from which this request is executed.
         *
         * The base URL never ends with a /.
         *
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static
         */
        public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBaseUrl();
        }

        /**
         * Gets the request's scheme.
         *
         * @return string
         * @static
         */
        public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScheme();
        }

        /**
         * Returns the port on which the request is made.
         *
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string can be a string if fetched from the server bag
         * @static
         */
        public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPort();
        }

        /**
         * Returns the user.
         *
         * @return string|null
         * @static
         */
        public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUser();
        }

        /**
         * Returns the password.
         *
         * @return string|null
         * @static
         */
        public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPassword();
        }

        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static
         */
        public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserInfo();
        }

        /**
         * Returns the HTTP host being requested.
         *
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string
         * @static
         */
        public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHttpHost();
        }

        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static
         */
        public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestUri();
        }

        /**
         * Gets the scheme and HTTP host.
         *
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static
         */
        public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSchemeAndHttpHost();
        }

        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static
         */
        public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUri();
        }

        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static
         */
        public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUriForPath($path);
        }

        /**
         * Returns the path as relative reference from the current Request path.
         *
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         *
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @return string The relative target path
         * @static
         */
        public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRelativeUriForPath($path);
        }

        /**
         * Generates the normalized query string for the Request.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static
         */
        public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getQueryString();
        }

        /**
         * Checks whether the request is secure or not.
         *
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @return bool
         * @static
         */
        public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isSecure();
        }

        /**
         * Returns the host name.
         *
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @return string
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static
         */
        public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHost();
        }

        /**
         * Sets the request method.
         *
         * @static
         */
        public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setMethod($method);
        }

        /**
         * Gets the request "intended" method.
         *
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         *
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         *
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static
         */
        public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMethod();
        }

        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static
         */
        public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRealMethod();
        }

        /**
         * Gets the mime type associated with the format.
         *
         * @return string|null The associated mime type (null if not found)
         * @static
         */
        public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMimeType($format);
        }

        /**
         * Gets the mime types associated with the format.
         *
         * @return array The associated mime types
         * @static
         */
        public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMimeTypes($format);
        }

        /**
         * Gets the format associated with the mime type.
         *
         * @return string|null The format (null if not found)
         * @static
         */
        public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getFormat($mimeType);
        }

        /**
         * Associates a format with mime types.
         *
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static
         */
        public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setFormat($format, $mimeTypes);
        }

        /**
         * Gets the request format.
         *
         * Here is the process to determine the format:
         *
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @return string|null The request format
         * @static
         * @see getPreferredFormat
         */
        public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestFormat($default);
        }

        /**
         * Sets the request format.
         *
         * @static
         */
        public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRequestFormat($format);
        }

        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static
         */
        public static function getContentType()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContentType();
        }

        /**
         * Sets the default locale.
         *
         * @static
         */
        public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setDefaultLocale($locale);
        }

        /**
         * Get the default locale.
         *
         * @return string
         * @static
         */
        public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getDefaultLocale();
        }

        /**
         * Sets the locale.
         *
         * @static
         */
        public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setLocale($locale);
        }

        /**
         * Get the locale.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLocale();
        }

        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool
         * @static
         */
        public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethod($method);
        }

        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @return bool
         * @static
         */
        public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodSafe();
        }

        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool
         * @static
         */
        public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodIdempotent();
        }

        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool True for GET and HEAD, false otherwise
         * @static
         */
        public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodCacheable();
        }

        /**
         * Returns the protocol version.
         *
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @return string|null
         * @static
         */
        public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getProtocolVersion();
        }

        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @static
         */
        public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContent($asResource);
        }

        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static
         */
        public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getETags();
        }

        /**
         *
         *
         * @return bool
         * @static
         */
        public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNoCache();
        }

        /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         *
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static
         */
        public static function getPreferredFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredFormat($default);
        }

        /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static
         */
        public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredLanguage($locales);
        }

        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static
         */
        public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLanguages();
        }

        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static
         */
        public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getCharsets();
        }

        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static
         */
        public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getEncodings();
        }

        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static
         */
        public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getAcceptableContentTypes();
        }

        /**
         * Returns true if the request is an XMLHttpRequest.
         *
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static
         */
        public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isXmlHttpRequest();
        }

        /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static
         */
        public static function preferSafeContent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->preferSafeContent();
        }

        /**
         * Indicates whether this request originated from a trusted proxy.
         *
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
         * @static
         */
        public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isFromTrustedProxy();
        }

        /**
         * Determine if the request is sending JSON.
         *
         * @return bool
         * @static
         */
        public static function isJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isJson();
        }

        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool
         * @static
         */
        public static function expectsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->expectsJson();
        }

        /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool
         * @static
         */
        public static function wantsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->wantsJson();
        }

        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool
         * @static
         */
        public static function accepts($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->accepts($contentTypes);
        }

        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null
         * @static
         */
        public static function prefers($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefers($contentTypes);
        }

        /**
         * Determine if the current request accepts any content type.
         *
         * @return bool
         * @static
         */
        public static function acceptsAnyContentType()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsAnyContentType();
        }

        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool
         * @static
         */
        public static function acceptsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsJson();
        }

        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool
         * @static
         */
        public static function acceptsHtml()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsHtml();
        }

        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool
         * @static
         */
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }

        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string
         * @static
         */
        public static function format($default = 'html')
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->format($default);
        }

        /**
         * Retrieve an old input item.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function old($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->old($key, $default);
        }

        /**
         * Flash the input for the current request to the session.
         *
         * @return void
         * @static
         */
        public static function flash()
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flash();
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function flashOnly($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashOnly($keys);
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function flashExcept($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashExcept($keys);
        }

        /**
         * Flush all of the old input from the session.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flush();
        }

        /**
         * Retrieve a server variable from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function server($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->server($key, $default);
        }

        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasHeader($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasHeader($key);
        }

        /**
         * Retrieve a header from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function header($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->header($key, $default);
        }

        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null
         * @static
         */
        public static function bearerToken()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->bearerToken();
        }

        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function exists($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->has($key);
        }

        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param string|array $keys
         * @return bool
         * @static
         */
        public static function hasAny($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasAny($keys);
        }

        /**
         * Apply the callback if the request contains the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed
         * @static
         */
        public static function whenHas($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenHas($key, $callback, $default);
        }

        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function filled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filled($key);
        }

        /**
         * Determine if the request contains an empty value for an input item.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function isNotFilled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNotFilled($key);
        }

        /**
         * Determine if the request contains a non-empty value for any of the given inputs.
         *
         * @param string|array $keys
         * @return bool
         * @static
         */
        public static function anyFilled($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->anyFilled($keys);
        }

        /**
         * Apply the callback if the request contains a non-empty value for the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed
         * @static
         */
        public static function whenFilled($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenFilled($key, $callback, $default);
        }

        /**
         * Determine if the request is missing a given input item key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->missing($key);
        }

        /**
         * Get the keys for all of the input and files.
         *
         * @return array
         * @static
         */
        public static function keys()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->keys();
        }

        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed|null $keys
         * @return array
         * @static
         */
        public static function all($keys = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->all($keys);
        }

        /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function input($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->input($key, $default);
        }

        /**
         * Retrieve input as a boolean value.
         *
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param string|null $key
         * @param bool $default
         * @return bool
         * @static
         */
        public static function boolean($key = null, $default = false)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->boolean($key, $default);
        }

        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array
         * @static
         */
        public static function only($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->only($keys);
        }

        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array
         * @static
         */
        public static function except($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->except($keys);
        }

        /**
         * Retrieve a query string item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function query($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->query($key, $default);
        }

        /**
         * Retrieve a request payload item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function post($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->post($key, $default);
        }

        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasCookie($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasCookie($key);
        }

        /**
         * Retrieve a cookie from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function cookie($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->cookie($key, $default);
        }

        /**
         * Get an array of all of the files on the request.
         *
         * @return array
         * @static
         */
        public static function allFiles()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->allFiles();
        }

        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasFile($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasFile($key);
        }

        /**
         * Retrieve a file from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return UploadedFile|UploadedFile[]|array|null
         * @static
         */
        public static function file($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->file($key, $default);
        }

        /**
         * Dump the request items and end the script.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function dd(...$keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->dd(...$keys);
        }

        /**
         * Dump the items.
         *
         * @param array $keys
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function dump($keys = [])
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dump($keys);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Http\Request::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }

        /**
         *
         *
         * @param array $rules
         * @param mixed $params
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }

        /**
         *
         *
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }

        /**
         *
         *
         * @param mixed $absolute
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Contracts\Routing\ResponseFactory
     */
    class Response
    {
        /**
         * Create a new response instance.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function make($content = '', $status = 200, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->make($content, $status, $headers);
        }

        /**
         * Create a new "no content" response.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function noContent($status = 204, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->noContent($status, $headers);
        }

        /**
         * Create a new response for a given view.
         *
         * @param string|array $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->view($view, $data, $status, $headers);
        }

        /**
         * Create a new JSON response instance.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return JsonResponse
         * @static
         */
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var ResponseFactory $instance */
            return $instance->json($data, $status, $headers, $options);
        }

        /**
         * Create a new JSONP response instance.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return JsonResponse
         * @static
         */
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var ResponseFactory $instance */
            return $instance->jsonp($callback, $data, $status, $headers, $options);
        }

        /**
         * Create a new streamed response instance.
         *
         * @param Closure $callback
         * @param int $status
         * @param array $headers
         * @return StreamedResponse
         * @static
         */
        public static function stream($callback, $status = 200, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->stream($callback, $status, $headers);
        }

        /**
         * Create a new streamed response instance as a file download.
         *
         * @param Closure $callback
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return StreamedResponse
         * @static
         */
        public static function streamDownload($callback, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var ResponseFactory $instance */
            return $instance->streamDownload($callback, $name, $headers, $disposition);
        }

        /**
         * Create a new file download response.
         *
         * @param SplFileInfo|string $file
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return BinaryFileResponse
         * @static
         */
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var ResponseFactory $instance */
            return $instance->download($file, $name, $headers, $disposition);
        }

        /**
         * Return the raw contents of a binary file.
         *
         * @param SplFileInfo|string $file
         * @param array $headers
         * @return BinaryFileResponse
         * @static
         */
        public static function file($file, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->file($file, $headers);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return RedirectResponse
         * @static
         */
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectTo($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectToRoute($route, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return RedirectResponse
         * @static
         */
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectToAction($action, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return RedirectResponse
         * @static
         */
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectGuest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return RedirectResponse
         * @static
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectToIntended($default, $status, $headers, $secure);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            ResponseFactory::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            ResponseFactory::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return ResponseFactory::hasMacro($name);
        }

    }

    /**
     *
     *
     * @method static RouteRegistrar as(string $value)
     * @method static RouteRegistrar domain(string $value)
     * @method static RouteRegistrar middleware(array|string|null $middleware)
     * @method static RouteRegistrar name(string $value)
     * @method static RouteRegistrar namespace(string|null $value)
     * @method static RouteRegistrar prefix(string $prefix)
     * @method static RouteRegistrar where(array $where)
     * @see \Illuminate\Routing\Router
     */
    class Route
    {
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function get($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->get($uri, $action);
        }

        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function post($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->post($uri, $action);
        }

        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function put($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->put($uri, $action);
        }

        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function patch($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->patch($uri, $action);
        }

        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function delete($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->delete($uri, $action);
        }

        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function options($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->options($uri, $action);
        }

        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function any($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->any($uri, $action);
        }

        /**
         * Register a new Fallback route with the router.
         *
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function fallback($action)
        {
            /** @var Router $instance */
            return $instance->fallback($action);
        }

        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function redirect($uri, $destination, $status = 302)
        {
            /** @var Router $instance */
            return $instance->redirect($uri, $destination, $status);
        }

        /**
         * Create a permanent redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function permanentRedirect($uri, $destination)
        {
            /** @var Router $instance */
            return $instance->permanentRedirect($uri, $destination);
        }

        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @param int|array $status
         * @param array $headers
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
            /** @var Router $instance */
            return $instance->view($uri, $view, $data, $status, $headers);
        }

        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function match($methods, $uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->match($methods, $uri, $action);
        }

        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function resources($resources, $options = [])
        {
            /** @var Router $instance */
            $instance->resources($resources, $options);
        }

        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return PendingResourceRegistration
         * @static
         */
        public static function resource($name, $controller, $options = [])
        {
            /** @var Router $instance */
            return $instance->resource($name, $controller, $options);
        }

        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function apiResources($resources, $options = [])
        {
            /** @var Router $instance */
            $instance->apiResources($resources, $options);
        }

        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return PendingResourceRegistration
         * @static
         */
        public static function apiResource($name, $controller, $options = [])
        {
            /** @var Router $instance */
            return $instance->apiResource($name, $controller, $options);
        }

        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param Closure|string $routes
         * @return void
         * @static
         */
        public static function group($attributes, $routes)
        {
            /** @var Router $instance */
            $instance->group($attributes, $routes);
        }

        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @param bool $prependExistingPrefix
         * @return array
         * @static
         */
        public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
            /** @var Router $instance */
            return $instance->mergeWithLastGroup($new, $prependExistingPrefix);
        }

        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string
         * @static
         */
        public static function getLastGroupPrefix()
        {
            /** @var Router $instance */
            return $instance->getLastGroupPrefix();
        }

        /**
         * Add a route to the underlying route collection.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function addRoute($methods, $uri, $action)
        {
            /** @var Router $instance */
            return $instance->addRoute($methods, $uri, $action);
        }

        /**
         * Create a new Route object.
         *
         * @param array|string $methods
         * @param string $uri
         * @param mixed $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function newRoute($methods, $uri, $action)
        {
            /** @var Router $instance */
            return $instance->newRoute($methods, $uri, $action);
        }

        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function respondWithRoute($name)
        {
            /** @var Router $instance */
            return $instance->respondWithRoute($name);
        }

        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function dispatch($request)
        {
            /** @var Router $instance */
            return $instance->dispatch($request);
        }

        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function dispatchToRoute($request)
        {
            /** @var Router $instance */
            return $instance->dispatchToRoute($request);
        }

        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array
         * @static
         */
        public static function gatherRouteMiddleware($route)
        {
            /** @var Router $instance */
            return $instance->gatherRouteMiddleware($route);
        }

        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function prepareResponse($request, $response)
        {
            /** @var Router $instance */
            return $instance->prepareResponse($request, $response);
        }

        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function toResponse($request, $response)
        {
            return Router::toResponse($request, $response);
        }

        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route
         * @throws ModelNotFoundException
         * @static
         */
        public static function substituteBindings($route)
        {
            /** @var Router $instance */
            return $instance->substituteBindings($route);
        }

        /**
         * Substitute the implicit Eloquent model bindings for the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void
         * @throws ModelNotFoundException
         * @static
         */
        public static function substituteImplicitBindings($route)
        {
            /** @var Router $instance */
            $instance->substituteImplicitBindings($route);
        }

        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void
         * @static
         */
        public static function matched($callback)
        {
            /** @var Router $instance */
            $instance->matched($callback);
        }

        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array
         * @static
         */
        public static function getMiddleware()
        {
            /** @var Router $instance */
            return $instance->getMiddleware();
        }

        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return Router
         * @static
         */
        public static function aliasMiddleware($name, $class)
        {
            /** @var Router $instance */
            return $instance->aliasMiddleware($name, $class);
        }

        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMiddlewareGroup($name)
        {
            /** @var Router $instance */
            return $instance->hasMiddlewareGroup($name);
        }

        /**
         * Get all of the defined middleware groups.
         *
         * @return array
         * @static
         */
        public static function getMiddlewareGroups()
        {
            /** @var Router $instance */
            return $instance->getMiddlewareGroups();
        }

        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return Router
         * @static
         */
        public static function middlewareGroup($name, $middleware)
        {
            /** @var Router $instance */
            return $instance->middlewareGroup($name, $middleware);
        }

        /**
         * Add a middleware to the beginning of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return Router
         * @static
         */
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            /** @var Router $instance */
            return $instance->prependMiddlewareToGroup($group, $middleware);
        }

        /**
         * Add a middleware to the end of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return Router
         * @static
         */
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            /** @var Router $instance */
            return $instance->pushMiddlewareToGroup($group, $middleware);
        }

        /**
         * Flush the router's middleware groups.
         *
         * @return Router
         * @static
         */
        public static function flushMiddlewareGroups()
        {
            /** @var Router $instance */
            return $instance->flushMiddlewareGroups();
        }

        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void
         * @static
         */
        public static function bind($key, $binder)
        {
            /** @var Router $instance */
            $instance->bind($key, $binder);
        }

        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param Closure|null $callback
         * @return void
         * @static
         */
        public static function model($key, $class, $callback = null)
        {
            /** @var Router $instance */
            $instance->model($key, $class, $callback);
        }

        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return Closure|null
         * @static
         */
        public static function getBindingCallback($key)
        {
            /** @var Router $instance */
            return $instance->getBindingCallback($key);
        }

        /**
         * Get the global "where" patterns.
         *
         * @return array
         * @static
         */
        public static function getPatterns()
        {
            /** @var Router $instance */
            return $instance->getPatterns();
        }

        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void
         * @static
         */
        public static function pattern($key, $pattern)
        {
            /** @var Router $instance */
            $instance->pattern($key, $pattern);
        }

        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void
         * @static
         */
        public static function patterns($patterns)
        {
            /** @var Router $instance */
            $instance->patterns($patterns);
        }

        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool
         * @static
         */
        public static function hasGroupStack()
        {
            /** @var Router $instance */
            return $instance->hasGroupStack();
        }

        /**
         * Get the current group stack for the router.
         *
         * @return array
         * @static
         */
        public static function getGroupStack()
        {
            /** @var Router $instance */
            return $instance->getGroupStack();
        }

        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function input($key, $default = null)
        {
            /** @var Router $instance */
            return $instance->input($key, $default);
        }

        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function getCurrentRequest()
        {
            /** @var Router $instance */
            return $instance->getCurrentRequest();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static function getCurrentRoute()
        {
            /** @var Router $instance */
            return $instance->getCurrentRoute();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static function current()
        {
            /** @var Router $instance */
            return $instance->current();
        }

        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function has($name)
        {
            /** @var Router $instance */
            return $instance->has($name);
        }

        /**
         * Get the current route name.
         *
         * @return string|null
         * @static
         */
        public static function currentRouteName()
        {
            /** @var Router $instance */
            return $instance->currentRouteName();
        }

        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function is(...$patterns)
        {
            /** @var Router $instance */
            return $instance->is(...$patterns);
        }

        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function currentRouteNamed(...$patterns)
        {
            /** @var Router $instance */
            return $instance->currentRouteNamed(...$patterns);
        }

        /**
         * Get the current route action.
         *
         * @return string|null
         * @static
         */
        public static function currentRouteAction()
        {
            /** @var Router $instance */
            return $instance->currentRouteAction();
        }

        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool
         * @static
         */
        public static function uses(...$patterns)
        {
            /** @var Router $instance */
            return $instance->uses(...$patterns);
        }

        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool
         * @static
         */
        public static function currentRouteUses($action)
        {
            /** @var Router $instance */
            return $instance->currentRouteUses($action);
        }

        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void
         * @static
         */
        public static function singularResourceParameters($singular = true)
        {
            /** @var Router $instance */
            $instance->singularResourceParameters($singular);
        }

        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void
         * @static
         */
        public static function resourceParameters($parameters = [])
        {
            /** @var Router $instance */
            $instance->resourceParameters($parameters);
        }

        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null
         * @static
         */
        public static function resourceVerbs($verbs = [])
        {
            /** @var Router $instance */
            return $instance->resourceVerbs($verbs);
        }

        /**
         * Get the underlying route collection.
         *
         * @return RouteCollectionInterface
         * @static
         */
        public static function getRoutes()
        {
            /** @var Router $instance */
            return $instance->getRoutes();
        }

        /**
         * Set the route collection instance.
         *
         * @param RouteCollection $routes
         * @return void
         * @static
         */
        public static function setRoutes($routes)
        {
            /** @var Router $instance */
            $instance->setRoutes($routes);
        }

        /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         * @return void
         * @static
         */
        public static function setCompiledRoutes($routes)
        {
            /** @var Router $instance */
            $instance->setCompiledRoutes($routes);
        }

        /**
         * Remove any duplicate middleware from the given array.
         *
         * @param array $middleware
         * @return array
         * @static
         */
        public static function uniqueMiddleware($middleware)
        {
            return Router::uniqueMiddleware($middleware);
        }

        /**
         * Set the container instance used by the router.
         *
         * @param \Illuminate\Container\Container $container
         * @return Router
         * @static
         */
        public static function setContainer($container)
        {
            /** @var Router $instance */
            return $instance->setContainer($container);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            Router::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            Router::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return Router::hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var Router $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         *
         *
         * @param mixed $options
         * @static
         * @see \Laravel\Ui\AuthRouteMethods::auth()
         */
        public static function auth($options = [])
        {
            return Router::auth($options);
        }

        /**
         *
         *
         * @see \Laravel\Ui\AuthRouteMethods::resetPassword()
         * @static
         */
        public static function resetPassword()
        {
            return Router::resetPassword();
        }

        /**
         *
         *
         * @see \Laravel\Ui\AuthRouteMethods::confirmPassword()
         * @static
         */
        public static function confirmPassword()
        {
            return Router::confirmPassword();
        }

        /**
         *
         *
         * @see \Laravel\Ui\AuthRouteMethods::emailVerification()
         * @static
         */
        public static function emailVerification()
        {
            return Router::emailVerification();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Database\Schema\Builder
     */
    class Schema
    {
        /**
         * Create a database in the schema.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function createDatabase($name)
        {
            /** @var MySqlBuilder $instance */
            return $instance->createDatabase($name);
        }

        /**
         * Drop a database from the schema if the database exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function dropDatabaseIfExists($name)
        {
            /** @var MySqlBuilder $instance */
            return $instance->dropDatabaseIfExists($name);
        }

        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool
         * @static
         */
        public static function hasTable($table)
        {
            /** @var MySqlBuilder $instance */
            return $instance->hasTable($table);
        }

        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array
         * @static
         */
        public static function getColumnListing($table)
        {
            /** @var MySqlBuilder $instance */
            return $instance->getColumnListing($table);
        }

        /**
         * Drop all tables from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllTables()
        {
            /** @var MySqlBuilder $instance */
            $instance->dropAllTables();
        }

        /**
         * Drop all views from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllViews()
        {
            /** @var MySqlBuilder $instance */
            $instance->dropAllViews();
        }

        /**
         * Get all of the table names for the database.
         *
         * @return array
         * @static
         */
        public static function getAllTables()
        {
            /** @var MySqlBuilder $instance */
            return $instance->getAllTables();
        }

        /**
         * Get all of the view names for the database.
         *
         * @return array
         * @static
         */
        public static function getAllViews()
        {
            /** @var MySqlBuilder $instance */
            return $instance->getAllViews();
        }

        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void
         * @static
         */
        public static function defaultStringLength($length)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            MySqlBuilder::defaultStringLength($length);
        }

        /**
         * Set the default morph key type for migrations.
         *
         * @param string $type
         * @return void
         * @throws InvalidArgumentException
         * @static
         */
        public static function defaultMorphKeyType($type)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            MySqlBuilder::defaultMorphKeyType($type);
        }

        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @return void
         * @static
         */
        public static function morphUsingUuids()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            MySqlBuilder::morphUsingUuids();
        }

        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool
         * @static
         */
        public static function hasColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->hasColumn($table, $column);
        }

        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool
         * @static
         */
        public static function hasColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->hasColumns($table, $columns);
        }

        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string
         * @static
         */
        public static function getColumnType($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->getColumnType($table, $column);
        }

        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function table($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->table($table, $callback);
        }

        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function create($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->create($table, $callback);
        }

        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function drop($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->drop($table);
        }

        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function dropIfExists($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->dropIfExists($table);
        }

        /**
         * Drop columns from a table schema.
         *
         * @param string $table
         * @param string|array $columns
         * @return void
         * @static
         */
        public static function dropColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->dropColumns($table, $columns);
        }

        /**
         * Drop all types from the database.
         *
         * @return void
         * @throws LogicException
         * @static
         */
        public static function dropAllTypes()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->dropAllTypes();
        }

        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void
         * @static
         */
        public static function rename($from, $to)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->rename($from, $to);
        }

        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function enableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->enableForeignKeyConstraints();
        }

        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function disableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->disableForeignKeyConstraints();
        }

        /**
         * Register a custom Doctrine mapping type.
         *
         * @param string $class
         * @param string $name
         * @param string $type
         * @return void
         * @throws DBALException
         * @throws RuntimeException
         * @static
         */
        public static function registerCustomDoctrineType($class, $name, $type)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->registerCustomDoctrineType($class, $name, $type);
        }

        /**
         * Get the database connection instance.
         *
         * @return Connection
         * @static
         */
        public static function getConnection()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->getConnection();
        }

        /**
         * Set the database connection instance.
         *
         * @param Connection $connection
         * @return MySqlBuilder
         * @static
         */
        public static function setConnection($connection)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            return $instance->setConnection($connection);
        }

        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param Closure $resolver
         * @return void
         * @static
         */
        public static function blueprintResolver($resolver)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var MySqlBuilder $instance */
            $instance->blueprintResolver($resolver);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Session\SessionManager
     * @see \Illuminate\Session\Store
     */
    class Session
    {
        /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool
         * @static
         */
        public static function shouldBlock()
        {
            /** @var SessionManager $instance */
            return $instance->shouldBlock();
        }

        /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null
         * @static
         */
        public static function blockDriver()
        {
            /** @var SessionManager $instance */
            return $instance->blockDriver();
        }

        /**
         * Get the session configuration.
         *
         * @return array
         * @static
         */
        public static function getSessionConfig()
        {
            /** @var SessionManager $instance */
            return $instance->getSessionConfig();
        }

        /**
         * Get the default session driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var SessionManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var SessionManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed
         * @throws InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return SessionManager
         * @static
         */
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return Container
         * @static
         */
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param Container $container
         * @return SessionManager
         * @static
         */
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return SessionManager
         * @static
         */
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool
         * @static
         */
        public static function start()
        {
            /** @var Store $instance */
            return $instance->start();
        }

        /**
         * Save the session data to storage.
         *
         * @return void
         * @static
         */
        public static function save()
        {
            /** @var Store $instance */
            $instance->save();
        }

        /**
         * Age the flash data for the session.
         *
         * @return void
         * @static
         */
        public static function ageFlashData()
        {
            /** @var Store $instance */
            $instance->ageFlashData();
        }

        /**
         * Get all of the session data.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var Store $instance */
            return $instance->all();
        }

        /**
         * Get a subset of the session data.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function only($keys)
        {
            /** @var Store $instance */
            return $instance->only($keys);
        }

        /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function exists($key)
        {
            /** @var Store $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the given key is missing from the session data.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var Store $instance */
            return $instance->missing($key);
        }

        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var Store $instance */
            return $instance->has($key);
        }

        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var Store $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function pull($key, $default = null)
        {
            /** @var Store $instance */
            return $instance->pull($key, $default);
        }

        /**
         * Determine if the session contains old input.
         *
         * @param string|null $key
         * @return bool
         * @static
         */
        public static function hasOldInput($key = null)
        {
            /** @var Store $instance */
            return $instance->hasOldInput($key);
        }

        /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function getOldInput($key = null, $default = null)
        {
            /** @var Store $instance */
            return $instance->getOldInput($key, $default);
        }

        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void
         * @static
         */
        public static function replace($attributes)
        {
            /** @var Store $instance */
            $instance->replace($attributes);
        }

        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function put($key, $value = null)
        {
            /** @var Store $instance */
            $instance->put($key, $value);
        }

        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function remember($key, $callback)
        {
            /** @var Store $instance */
            return $instance->remember($key, $callback);
        }

        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var Store $instance */
            $instance->push($key, $value);
        }

        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed
         * @static
         */
        public static function increment($key, $amount = 1)
        {
            /** @var Store $instance */
            return $instance->increment($key, $amount);
        }

        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int
         * @static
         */
        public static function decrement($key, $amount = 1)
        {
            /** @var Store $instance */
            return $instance->decrement($key, $amount);
        }

        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function flash($key, $value = true)
        {
            /** @var Store $instance */
            $instance->flash($key, $value);
        }

        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function now($key, $value)
        {
            /** @var Store $instance */
            $instance->now($key, $value);
        }

        /**
         * Reflash all of the session flash data.
         *
         * @return void
         * @static
         */
        public static function reflash()
        {
            /** @var Store $instance */
            $instance->reflash();
        }

        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void
         * @static
         */
        public static function keep($keys = null)
        {
            /** @var Store $instance */
            $instance->keep($keys);
        }

        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void
         * @static
         */
        public static function flashInput($value)
        {
            /** @var Store $instance */
            $instance->flashInput($value);
        }

        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function remove($key)
        {
            /** @var Store $instance */
            return $instance->remove($key);
        }

        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void
         * @static
         */
        public static function forget($keys)
        {
            /** @var Store $instance */
            $instance->forget($keys);
        }

        /**
         * Remove all of the items from the session.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var Store $instance */
            $instance->flush();
        }

        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool
         * @static
         */
        public static function invalidate()
        {
            /** @var Store $instance */
            return $instance->invalidate();
        }

        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool
         * @static
         */
        public static function regenerate($destroy = false)
        {
            /** @var Store $instance */
            return $instance->regenerate($destroy);
        }

        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool
         * @static
         */
        public static function migrate($destroy = false)
        {
            /** @var Store $instance */
            return $instance->migrate($destroy);
        }

        /**
         * Determine if the session has been started.
         *
         * @return bool
         * @static
         */
        public static function isStarted()
        {
            /** @var Store $instance */
            return $instance->isStarted();
        }

        /**
         * Get the name of the session.
         *
         * @return string
         * @static
         */
        public static function getName()
        {
            /** @var Store $instance */
            return $instance->getName();
        }

        /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setName($name)
        {
            /** @var Store $instance */
            $instance->setName($name);
        }

        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */
        public static function getId()
        {
            /** @var Store $instance */
            return $instance->getId();
        }

        /**
         * Set the session ID.
         *
         * @param string $id
         * @return void
         * @static
         */
        public static function setId($id)
        {
            /** @var Store $instance */
            $instance->setId($id);
        }

        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool
         * @static
         */
        public static function isValidId($id)
        {
            /** @var Store $instance */
            return $instance->isValidId($id);
        }

        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void
         * @static
         */
        public static function setExists($value)
        {
            /** @var Store $instance */
            $instance->setExists($value);
        }

        /**
         * Get the CSRF token value.
         *
         * @return string
         * @static
         */
        public static function token()
        {
            /** @var Store $instance */
            return $instance->token();
        }

        /**
         * Regenerate the CSRF token value.
         *
         * @return void
         * @static
         */
        public static function regenerateToken()
        {
            /** @var Store $instance */
            $instance->regenerateToken();
        }

        /**
         * Get the previous URL from the session.
         *
         * @return string|null
         * @static
         */
        public static function previousUrl()
        {
            /** @var Store $instance */
            return $instance->previousUrl();
        }

        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void
         * @static
         */
        public static function setPreviousUrl($url)
        {
            /** @var Store $instance */
            $instance->setPreviousUrl($url);
        }

        /**
         * Specify that the user has confirmed their password.
         *
         * @return void
         * @static
         */
        public static function passwordConfirmed()
        {
            /** @var Store $instance */
            $instance->passwordConfirmed();
        }

        /**
         * Get the underlying session handler implementation.
         *
         * @return SessionHandlerInterface
         * @static
         */
        public static function getHandler()
        {
            /** @var Store $instance */
            return $instance->getHandler();
        }

        /**
         * Determine if the session handler needs a request.
         *
         * @return bool
         * @static
         */
        public static function handlerNeedsRequest()
        {
            /** @var Store $instance */
            return $instance->handlerNeedsRequest();
        }

        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function setRequestOnHandler($request)
        {
            /** @var Store $instance */
            $instance->setRequestOnHandler($request);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Filesystem\FilesystemManager
     */
    class Storage
    {
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return FilesystemAdapter
         * @static
         */
        public static function drive($name = null)
        {
            /** @var FilesystemManager $instance */
            return $instance->drive($name);
        }

        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return FilesystemAdapter
         * @static
         */
        public static function disk($name = null)
        {
            /** @var FilesystemManager $instance */
            return $instance->disk($name);
        }

        /**
         * Get a default cloud filesystem instance.
         *
         * @return FilesystemAdapter
         * @static
         */
        public static function cloud()
        {
            /** @var FilesystemManager $instance */
            return $instance->cloud();
        }

        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         * @return FilesystemAdapter
         * @static
         */
        public static function build($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->build($config);
        }

        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return FilesystemAdapter
         * @static
         */
        public static function createLocalDriver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createLocalDriver($config);
        }

        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return FilesystemAdapter
         * @static
         */
        public static function createFtpDriver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }

        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return FilesystemAdapter
         * @static
         */
        public static function createSftpDriver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }

        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return Cloud
         * @static
         */
        public static function createS3Driver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }

        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return FilesystemManager
         * @static
         */
        public static function set($name, $disk)
        {
            /** @var FilesystemManager $instance */
            return $instance->set($name, $disk);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultCloudDriver()
        {
            /** @var FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }

        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return FilesystemManager
         * @static
         */
        public static function forgetDisk($disk)
        {
            /** @var FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var FilesystemManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param Closure $callback
         * @return FilesystemManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var FilesystemManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Assert that the given file exists.
         *
         * @param string|array $path
         * @param string|null $content
         * @return FilesystemAdapter
         * @static
         */
        public static function assertExists($path, $content = null)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->assertExists($path, $content);
        }

        /**
         * Assert that the given file does not exist.
         *
         * @param string|array $path
         * @return FilesystemAdapter
         * @static
         */
        public static function assertMissing($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }

        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->missing($path);
        }

        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->path($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string
         * @throws FileNotFoundException
         * @static
         */
        public static function get($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->get($path);
        }

        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return StreamedResponse
         * @static
         */
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            /** @var FilesystemAdapter $instance */
            return $instance->response($path, $name, $headers, $disposition);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return StreamedResponse
         * @static
         */
        public static function download($path, $name = null, $headers = [])
        {
            /** @var FilesystemAdapter $instance */
            return $instance->download($path, $name, $headers);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param mixed $options
         * @return bool
         * @static
         */
        public static function put($path, $contents, $options = [])
        {
            /** @var FilesystemAdapter $instance */
            return $instance->put($path, $contents, $options);
        }

        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|UploadedFile|string $file
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFile($path, $file, $options = [])
        {
            /** @var FilesystemAdapter $instance */
            return $instance->putFile($path, $file, $options);
        }

        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|UploadedFile|string $file
         * @param string $name
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFileAs($path, $file, $name, $options = [])
        {
            /** @var FilesystemAdapter $instance */
            return $instance->putFileAs($path, $file, $name, $options);
        }

        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getVisibility($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }

        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool
         * @static
         */
        public static function setVisibility($path, $visibility)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->setVisibility($path, $visibility);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function prepend($path, $data, $separator = '
')
        {
            /** @var FilesystemAdapter $instance */
            return $instance->prepend($path, $data, $separator);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function append($path, $data, $separator = '
')
        {
            /** @var FilesystemAdapter $instance */
            return $instance->append($path, $data, $separator);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->delete($paths);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function copy($from, $to)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->copy($from, $to);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function move($from, $to)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->move($from, $to);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->size($path);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->lastModified($path);
        }

        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string
         * @throws RuntimeException
         * @static
         */
        public static function url($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->url($path);
        }

        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @throws FileNotFoundException
         * @static
         */
        public static function readStream($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->readStream($path);
        }

        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool
         * @throws InvalidArgumentException If $resource is not a file handle.
         * @throws FileExistsException
         * @static
         */
        public static function writeStream($path, $resource, $options = [])
        {
            /** @var FilesystemAdapter $instance */
            return $instance->writeStream($path, $resource, $options);
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param DateTimeInterface $expiration
         * @param array $options
         * @return string
         * @throws RuntimeException
         * @static
         */
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            /** @var FilesystemAdapter $instance */
            return $instance->temporaryUrl($path, $expiration, $options);
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param AwsS3Adapter $adapter
         * @param string $path
         * @param DateTimeInterface $expiration
         * @param array $options
         * @return string
         * @static
         */
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function files($directory = null, $recursive = false)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->files($directory, $recursive);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allFiles($directory = null)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function directories($directory = null, $recursive = false)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->directories($directory, $recursive);
        }

        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allDirectories($directory = null)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function makeDirectory($path)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }

        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }

        /**
         * Flush the Flysystem cache.
         *
         * @return void
         * @static
         */
        public static function flushCache()
        {
            /** @var FilesystemAdapter $instance */
            $instance->flushCache();
        }

        /**
         * Get the Flysystem driver.
         *
         * @return FilesystemInterface
         * @static
         */
        public static function getDriver()
        {
            /** @var FilesystemAdapter $instance */
            return $instance->getDriver();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            FilesystemAdapter::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            FilesystemAdapter::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return FilesystemAdapter::hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var FilesystemAdapter $instance */
            return $instance->macroCall($method, $parameters);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Routing\UrlGenerator
     */
    class URL
    {
        /**
         * Get the full URL for the current request.
         *
         * @return string
         * @static
         */
        public static function full()
        {
            /** @var UrlGenerator $instance */
            return $instance->full();
        }

        /**
         * Get the current URL for the request.
         *
         * @return string
         * @static
         */
        public static function current()
        {
            /** @var UrlGenerator $instance */
            return $instance->current();
        }

        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string
         * @static
         */
        public static function previous($fallback = false)
        {
            /** @var UrlGenerator $instance */
            return $instance->previous($fallback);
        }

        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function to($path, $extra = [], $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->to($path, $extra, $secure);
        }

        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string
         * @static
         */
        public static function secure($path, $parameters = [])
        {
            /** @var UrlGenerator $instance */
            return $instance->secure($path, $parameters);
        }

        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function asset($path, $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->asset($path, $secure);
        }

        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function secureAsset($path)
        {
            /** @var UrlGenerator $instance */
            return $instance->secureAsset($path);
        }

        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function assetFrom($root, $path, $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->assetFrom($root, $path, $secure);
        }

        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function formatScheme($secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatScheme($secure);
        }

        /**
         * Create a signed route URL for a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param DateTimeInterface|DateInterval|int|null $expiration
         * @param bool $absolute
         * @return string
         * @throws InvalidArgumentException
         * @static
         */
        public static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->signedRoute($name, $parameters, $expiration, $absolute);
        }

        /**
         * Create a temporary signed route URL for a named route.
         *
         * @param string $name
         * @param DateTimeInterface|DateInterval|int $expiration
         * @param array $parameters
         * @param bool $absolute
         * @return string
         * @static
         */
        public static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->temporarySignedRoute($name, $expiration, $parameters, $absolute);
        }

        /**
         * Determine if the given request has a valid signature.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @return bool
         * @static
         */
        public static function hasValidSignature($request, $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->hasValidSignature($request, $absolute);
        }

        /**
         * Determine if the given request has a valid signature for a relative URL.
         *
         * @param \Illuminate\Http\Request $request
         * @return bool
         * @static
         */
        public static function hasValidRelativeSignature($request)
        {
            /** @var UrlGenerator $instance */
            return $instance->hasValidRelativeSignature($request);
        }

        /**
         * Determine if the signature from the given request matches the URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @return bool
         * @static
         */
        public static function hasCorrectSignature($request, $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->hasCorrectSignature($request, $absolute);
        }

        /**
         * Determine if the expires timestamp from the given request is not from the past.
         *
         * @param \Illuminate\Http\Request $request
         * @return bool
         * @static
         */
        public static function signatureHasNotExpired($request)
        {
            /** @var UrlGenerator $instance */
            return $instance->signatureHasNotExpired($request);
        }

        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws RouteNotFoundException
         * @static
         */
        public static function route($name, $parameters = [], $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->route($name, $parameters, $absolute);
        }

        /**
         * Get the URL for a given route instance.
         *
         * @param \Illuminate\Routing\Route $route
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws UrlGenerationException
         * @static
         */
        public static function toRoute($route, $parameters, $absolute)
        {
            /** @var UrlGenerator $instance */
            return $instance->toRoute($route, $parameters, $absolute);
        }

        /**
         * Get the URL to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws InvalidArgumentException
         * @static
         */
        public static function action($action, $parameters = [], $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->action($action, $parameters, $absolute);
        }

        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array
         * @static
         */
        public static function formatParameters($parameters)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatParameters($parameters);
        }

        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string|null $root
         * @return string
         * @static
         */
        public static function formatRoot($scheme, $root = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatRoot($scheme, $root);
        }

        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @param \Illuminate\Routing\Route|null $route
         * @return string
         * @static
         */
        public static function format($root, $path, $route = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->format($root, $path, $route);
        }

        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isValidUrl($path)
        {
            /** @var UrlGenerator $instance */
            return $instance->isValidUrl($path);
        }

        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void
         * @static
         */
        public static function defaults($defaults)
        {
            /** @var UrlGenerator $instance */
            $instance->defaults($defaults);
        }

        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array
         * @static
         */
        public static function getDefaultParameters()
        {
            /** @var UrlGenerator $instance */
            return $instance->getDefaultParameters();
        }

        /**
         * Force the scheme for URLs.
         *
         * @param string|null $scheme
         * @return void
         * @static
         */
        public static function forceScheme($scheme)
        {
            /** @var UrlGenerator $instance */
            $instance->forceScheme($scheme);
        }

        /**
         * Set the forced root URL.
         *
         * @param string|null $root
         * @return void
         * @static
         */
        public static function forceRootUrl($root)
        {
            /** @var UrlGenerator $instance */
            $instance->forceRootUrl($root);
        }

        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param Closure $callback
         * @return UrlGenerator
         * @static
         */
        public static function formatHostUsing($callback)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatHostUsing($callback);
        }

        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param Closure $callback
         * @return UrlGenerator
         * @static
         */
        public static function formatPathUsing($callback)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatPathUsing($callback);
        }

        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return Closure
         * @static
         */
        public static function pathFormatter()
        {
            /** @var UrlGenerator $instance */
            return $instance->pathFormatter();
        }

        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function getRequest()
        {
            /** @var UrlGenerator $instance */
            return $instance->getRequest();
        }

        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function setRequest($request)
        {
            /** @var UrlGenerator $instance */
            $instance->setRequest($request);
        }

        /**
         * Set the route collection.
         *
         * @param RouteCollectionInterface $routes
         * @return UrlGenerator
         * @static
         */
        public static function setRoutes($routes)
        {
            /** @var UrlGenerator $instance */
            return $instance->setRoutes($routes);
        }

        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return UrlGenerator
         * @static
         */
        public static function setSessionResolver($sessionResolver)
        {
            /** @var UrlGenerator $instance */
            return $instance->setSessionResolver($sessionResolver);
        }

        /**
         * Set the encryption key resolver.
         *
         * @param callable $keyResolver
         * @return UrlGenerator
         * @static
         */
        public static function setKeyResolver($keyResolver)
        {
            /** @var UrlGenerator $instance */
            return $instance->setKeyResolver($keyResolver);
        }

        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return UrlGenerator
         * @static
         */
        public static function setRootControllerNamespace($rootNamespace)
        {
            /** @var UrlGenerator $instance */
            return $instance->setRootControllerNamespace($rootNamespace);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            UrlGenerator::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            UrlGenerator::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return UrlGenerator::hasMacro($name);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Validation\Factory
     */
    class Validator
    {
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator
         * @static
         */
        public static function make($data, $rules, $messages = [], $customAttributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->make($data, $rules, $messages, $customAttributes);
        }

        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return array
         * @throws ValidationException
         * @static
         */
        public static function validate($data, $rules, $messages = [], $customAttributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->validate($data, $rules, $messages, $customAttributes);
        }

        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extend($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extend($rule, $extension, $message);
        }

        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendImplicit($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendImplicit($rule, $extension, $message);
        }

        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendDependent($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendDependent($rule, $extension, $message);
        }

        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param Closure|string $replacer
         * @return void
         * @static
         */
        public static function replacer($rule, $replacer)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->replacer($rule, $replacer);
        }

        /**
         * Indicate that unvalidated array keys should be excluded, even if the parent array was validated.
         *
         * @return void
         * @static
         */
        public static function excludeUnvalidatedArrayKeys()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->excludeUnvalidatedArrayKeys();
        }

        /**
         * Set the Validator instance resolver.
         *
         * @param Closure $resolver
         * @return void
         * @static
         */
        public static function resolver($resolver)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->resolver($resolver);
        }

        /**
         * Get the Translator implementation.
         *
         * @return Translator
         * @static
         */
        public static function getTranslator()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getTranslator();
        }

        /**
         * Get the Presence Verifier implementation.
         *
         * @return PresenceVerifierInterface
         * @static
         */
        public static function getPresenceVerifier()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getPresenceVerifier();
        }

        /**
         * Set the Presence Verifier implementation.
         *
         * @param PresenceVerifierInterface $presenceVerifier
         * @return void
         * @static
         */
        public static function setPresenceVerifier($presenceVerifier)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->setPresenceVerifier($presenceVerifier);
        }

        /**
         * Get the container instance used by the validation factory.
         *
         * @return Container
         * @static
         */
        public static function getContainer()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the validation factory.
         *
         * @param Container $container
         * @return \Illuminate\Validation\Factory
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @see \Illuminate\View\Factory
     */
    class View
    {
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function file($path, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->file($path, $data, $mergeData);
        }

        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function make($view, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->make($view, $data, $mergeData);
        }

        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @throws InvalidArgumentException
         * @static
         */
        public static function first($views, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->first($views, $data, $mergeData);
        }

        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param Arrayable|array $data
         * @param array $mergeData
         * @return string
         * @static
         */
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->renderWhen($condition, $view, $data, $mergeData);
        }

        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string
         * @static
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            /** @var Factory $instance */
            return $instance->renderEach($view, $data, $iterator, $empty);
        }

        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool
         * @static
         */
        public static function exists($view)
        {
            /** @var Factory $instance */
            return $instance->exists($view);
        }

        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return Engine
         * @throws InvalidArgumentException
         * @static
         */
        public static function getEngineFromPath($path)
        {
            /** @var Factory $instance */
            return $instance->getEngineFromPath($path);
        }

        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed|null $value
         * @return mixed
         * @static
         */
        public static function share($key, $value = null)
        {
            /** @var Factory $instance */
            return $instance->share($key, $value);
        }

        /**
         * Increment the rendering counter.
         *
         * @return void
         * @static
         */
        public static function incrementRender()
        {
            /** @var Factory $instance */
            $instance->incrementRender();
        }

        /**
         * Decrement the rendering counter.
         *
         * @return void
         * @static
         */
        public static function decrementRender()
        {
            /** @var Factory $instance */
            $instance->decrementRender();
        }

        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */
        public static function doneRendering()
        {
            /** @var Factory $instance */
            return $instance->doneRendering();
        }

        /**
         * Determine if the given once token has been rendered.
         *
         * @param string $id
         * @return bool
         * @static
         */
        public static function hasRenderedOnce($id)
        {
            /** @var Factory $instance */
            return $instance->hasRenderedOnce($id);
        }

        /**
         * Mark the given once token as having been rendered.
         *
         * @param string $id
         * @return void
         * @static
         */
        public static function markAsRenderedOnce($id)
        {
            /** @var Factory $instance */
            $instance->markAsRenderedOnce($id);
        }

        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void
         * @static
         */
        public static function addLocation($location)
        {
            /** @var Factory $instance */
            $instance->addLocation($location);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return Factory
         * @static
         */
        public static function addNamespace($namespace, $hints)
        {
            /** @var Factory $instance */
            return $instance->addNamespace($namespace, $hints);
        }

        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return Factory
         * @static
         */
        public static function prependNamespace($namespace, $hints)
        {
            /** @var Factory $instance */
            return $instance->prependNamespace($namespace, $hints);
        }

        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return Factory
         * @static
         */
        public static function replaceNamespace($namespace, $hints)
        {
            /** @var Factory $instance */
            return $instance->replaceNamespace($namespace, $hints);
        }

        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param Closure|null $resolver
         * @return void
         * @static
         */
        public static function addExtension($extension, $engine, $resolver = null)
        {
            /** @var Factory $instance */
            $instance->addExtension($extension, $engine, $resolver);
        }

        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void
         * @static
         */
        public static function flushState()
        {
            /** @var Factory $instance */
            $instance->flushState();
        }

        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void
         * @static
         */
        public static function flushStateIfDoneRendering()
        {
            /** @var Factory $instance */
            $instance->flushStateIfDoneRendering();
        }

        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */
        public static function getExtensions()
        {
            /** @var Factory $instance */
            return $instance->getExtensions();
        }

        /**
         * Get the engine resolver instance.
         *
         * @return EngineResolver
         * @static
         */
        public static function getEngineResolver()
        {
            /** @var Factory $instance */
            return $instance->getEngineResolver();
        }

        /**
         * Get the view finder instance.
         *
         * @return ViewFinderInterface
         * @static
         */
        public static function getFinder()
        {
            /** @var Factory $instance */
            return $instance->getFinder();
        }

        /**
         * Set the view finder instance.
         *
         * @param ViewFinderInterface $finder
         * @return void
         * @static
         */
        public static function setFinder($finder)
        {
            /** @var Factory $instance */
            $instance->setFinder($finder);
        }

        /**
         * Flush the cache of views located by the finder.
         *
         * @return void
         * @static
         */
        public static function flushFinderCache()
        {
            /** @var Factory $instance */
            $instance->flushFinderCache();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return Dispatcher
         * @static
         */
        public static function getDispatcher()
        {
            /** @var Factory $instance */
            return $instance->getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param Dispatcher $events
         * @return void
         * @static
         */
        public static function setDispatcher($events)
        {
            /** @var Factory $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Get the IoC container instance.
         *
         * @return Container
         * @static
         */
        public static function getContainer()
        {
            /** @var Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @param Container $container
         * @return void
         * @static
         */
        public static function setContainer($container)
        {
            /** @var Factory $instance */
            $instance->setContainer($container);
        }

        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function shared($key, $default = null)
        {
            /** @var Factory $instance */
            return $instance->shared($key, $default);
        }

        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */
        public static function getShared()
        {
            /** @var Factory $instance */
            return $instance->getShared();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            Factory::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            Factory::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return Factory::hasMacro($name);
        }

        /**
         * Start a component rendering process.
         *
         * @param \Illuminate\Contracts\View\View|Htmlable|Closure|string $view
         * @param array $data
         * @return void
         * @static
         */
        public static function startComponent($view, $data = [])
        {
            /** @var Factory $instance */
            $instance->startComponent($view, $data);
        }

        /**
         * Get the first view that actually exists from the given list, and start a component.
         *
         * @param array $names
         * @param array $data
         * @return void
         * @static
         */
        public static function startComponentFirst($names, $data = [])
        {
            /** @var Factory $instance */
            $instance->startComponentFirst($names, $data);
        }

        /**
         * Render the current component.
         *
         * @return string
         * @static
         */
        public static function renderComponent()
        {
            /** @var Factory $instance */
            return $instance->renderComponent();
        }

        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @return void
         * @throws InvalidArgumentException
         * @static
         */
        public static function slot($name, $content = null)
        {
            /** @var Factory $instance */
            $instance->slot($name, $content);
        }

        /**
         * Save the slot content for rendering.
         *
         * @return void
         * @static
         */
        public static function endSlot()
        {
            /** @var Factory $instance */
            $instance->endSlot();
        }

        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param Closure|string $callback
         * @return array
         * @static
         */
        public static function creator($views, $callback)
        {
            /** @var Factory $instance */
            return $instance->creator($views, $callback);
        }

        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array
         * @static
         */
        public static function composers($composers)
        {
            /** @var Factory $instance */
            return $instance->composers($composers);
        }

        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param Closure|string $callback
         * @return array
         * @static
         */
        public static function composer($views, $callback)
        {
            /** @var Factory $instance */
            return $instance->composer($views, $callback);
        }

        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void
         * @static
         */
        public static function callComposer($view)
        {
            /** @var Factory $instance */
            $instance->callComposer($view);
        }

        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void
         * @static
         */
        public static function callCreator($view)
        {
            /** @var Factory $instance */
            $instance->callCreator($view);
        }

        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void
         * @static
         */
        public static function startSection($section, $content = null)
        {
            /** @var Factory $instance */
            $instance->startSection($section, $content);
        }

        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function inject($section, $content)
        {
            /** @var Factory $instance */
            $instance->inject($section, $content);
        }

        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */
        public static function yieldSection()
        {
            /** @var Factory $instance */
            return $instance->yieldSection();
        }

        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string
         * @throws InvalidArgumentException
         * @static
         */
        public static function stopSection($overwrite = false)
        {
            /** @var Factory $instance */
            return $instance->stopSection($overwrite);
        }

        /**
         * Stop injecting content into a section and append it.
         *
         * @return string
         * @throws InvalidArgumentException
         * @static
         */
        public static function appendSection()
        {
            /** @var Factory $instance */
            return $instance->appendSection();
        }

        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldContent($section, $default = '')
        {
            /** @var Factory $instance */
            return $instance->yieldContent($section, $default);
        }

        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string
         * @static
         */
        public static function parentPlaceholder($section = '')
        {
            return Factory::parentPlaceholder($section);
        }

        /**
         * Check if the section exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasSection($name)
        {
            /** @var Factory $instance */
            return $instance->hasSection($name);
        }

        /**
         * Check if section does not exist.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function sectionMissing($name)
        {
            /** @var Factory $instance */
            return $instance->sectionMissing($name);
        }

        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function getSection($name, $default = null)
        {
            /** @var Factory $instance */
            return $instance->getSection($name, $default);
        }

        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */
        public static function getSections()
        {
            /** @var Factory $instance */
            return $instance->getSections();
        }

        /**
         * Flush all of the sections.
         *
         * @return void
         * @static
         */
        public static function flushSections()
        {
            /** @var Factory $instance */
            $instance->flushSections();
        }

        /**
         * Add new loop to the stack.
         *
         * @param Countable|array $data
         * @return void
         * @static
         */
        public static function addLoop($data)
        {
            /** @var Factory $instance */
            $instance->addLoop($data);
        }

        /**
         * Increment the top loop's indices.
         *
         * @return void
         * @static
         */
        public static function incrementLoopIndices()
        {
            /** @var Factory $instance */
            $instance->incrementLoopIndices();
        }

        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void
         * @static
         */
        public static function popLoop()
        {
            /** @var Factory $instance */
            $instance->popLoop();
        }

        /**
         * Get an instance of the last loop in the stack.
         *
         * @return stdClass|null
         * @static
         */
        public static function getLastLoop()
        {
            /** @var Factory $instance */
            return $instance->getLastLoop();
        }

        /**
         * Get the entire loop stack.
         *
         * @return array
         * @static
         */
        public static function getLoopStack()
        {
            /** @var Factory $instance */
            return $instance->getLoopStack();
        }

        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startPush($section, $content = '')
        {
            /** @var Factory $instance */
            $instance->startPush($section, $content);
        }

        /**
         * Stop injecting content into a push section.
         *
         * @return string
         * @throws InvalidArgumentException
         * @static
         */
        public static function stopPush()
        {
            /** @var Factory $instance */
            return $instance->stopPush();
        }

        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startPrepend($section, $content = '')
        {
            /** @var Factory $instance */
            $instance->startPrepend($section, $content);
        }

        /**
         * Stop prepending content into a push section.
         *
         * @return string
         * @throws InvalidArgumentException
         * @static
         */
        public static function stopPrepend()
        {
            /** @var Factory $instance */
            return $instance->stopPrepend();
        }

        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldPushContent($section, $default = '')
        {
            /** @var Factory $instance */
            return $instance->yieldPushContent($section, $default);
        }

        /**
         * Flush all of the stacks.
         *
         * @return void
         * @static
         */
        public static function flushStacks()
        {
            /** @var Factory $instance */
            $instance->flushStacks();
        }

        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void
         * @static
         */
        public static function startTranslation($replacements = [])
        {
            /** @var Factory $instance */
            $instance->startTranslation($replacements);
        }

        /**
         * Render the current translation.
         *
         * @return string
         * @static
         */
        public static function renderTranslation()
        {
            /** @var Factory $instance */
            return $instance->renderTranslation();
        }

    }

}

namespace Illuminate\Support {
    /**
     *
     *
     */
    class Arr
    {

    }

    /**
     *
     *
     */
    class Str
    {

    }

}

namespace Facade\Ignition\Facades {
    /**
     * Class Flare.
     *
     * @see \Facade\FlareClient\Flare
     */
    class Flare
    {
        /**
         *
         *
         * @static
         */
        public static function register($apiKey, $apiSecret = null, $contextDetector = null, $container = null)
        {
            return \Facade\FlareClient\Flare::register($apiKey, $apiSecret, $contextDetector, $container);
        }

        /**
         *
         *
         * @static
         */
        public static function determineVersionUsing($determineVersionCallable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->determineVersionUsing($determineVersionCallable);
        }

        /**
         *
         *
         * @static
         */
        public static function reportErrorLevels($reportErrorLevels)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->reportErrorLevels($reportErrorLevels);
        }

        /**
         *
         *
         * @static
         */
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }

        /**
         *
         *
         * @return null|string
         * @static
         */
        public static function version()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->version();
        }

        /**
         *
         *
         * @static
         */
        public static function getMiddleware()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->getMiddleware();
        }

        /**
         *
         *
         * @static
         */
        public static function registerFlareHandlers()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerFlareHandlers();
        }

        /**
         *
         *
         * @static
         */
        public static function registerExceptionHandler()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerExceptionHandler();
        }

        /**
         *
         *
         * @static
         */
        public static function registerErrorHandler()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerErrorHandler();
        }

        /**
         *
         *
         * @static
         */
        public static function registerMiddleware($callable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->registerMiddleware($callable);
        }

        /**
         *
         *
         * @static
         */
        public static function getMiddlewares()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->getMiddlewares();
        }

        /**
         *
         *
         * @static
         */
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->glow($name, $messageLevel, $metaData);
        }

        /**
         *
         *
         * @static
         */
        public static function handleException($throwable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->handleException($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static function handleError($code, $message, $file = '', $line = 0)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->handleError($code, $message, $file, $line);
        }

        /**
         *
         *
         * @static
         */
        public static function applicationPath($applicationPath)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->applicationPath($applicationPath);
        }

        /**
         *
         *
         * @static
         */
        public static function report($throwable, $callback = null)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->report($throwable, $callback);
        }

        /**
         *
         *
         * @static
         */
        public static function reportMessage($message, $logLevel, $callback = null)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->reportMessage($message, $logLevel, $callback);
        }

        /**
         *
         *
         * @static
         */
        public static function sendTestReport($throwable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->sendTestReport($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static function reset()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->reset();
        }

        /**
         *
         *
         * @static
         */
        public static function anonymizeIp()
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->anonymizeIp();
        }

        /**
         *
         *
         * @static
         */
        public static function censorRequestBodyFields($fieldNames)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->censorRequestBodyFields($fieldNames);
        }

        /**
         *
         *
         * @static
         */
        public static function createReport($throwable)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->createReport($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static function createReportFromMessage($message, $logLevel)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->createReportFromMessage($message, $logLevel);
        }

        /**
         *
         *
         * @static
         */
        public static function stage($stage)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->stage($stage);
        }

        /**
         *
         *
         * @static
         */
        public static function messageLevel($messageLevel)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->messageLevel($messageLevel);
        }

        /**
         *
         *
         * @static
         */
        public static function getGroup($groupName = 'context', $default = [])
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->getGroup($groupName, $default);
        }

        /**
         *
         *
         * @static
         */
        public static function context($key, $value)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->context($key, $value);
        }

        /**
         *
         *
         * @static
         */
        public static function group($groupName, $properties)
        {
            /** @var \Facade\FlareClient\Flare $instance */
            return $instance->group($groupName, $properties);
        }

    }

}

namespace Intervention\Image\Facades {

    use Closure;
    use Intervention\Image\ImageManager;

    /**
     *
     *
     */
    class Image
    {
        /**
         * Overrides configuration settings
         *
         * @param array $config
         * @return self
         * @static
         */
        public static function configure($config = [])
        {
            /** @var ImageManager $instance */
            return $instance->configure($config);
        }

        /**
         * Initiates an Image instance from different input types
         *
         * @param mixed $data
         * @return \Intervention\Image\Image
         * @static
         */
        public static function make($data)
        {
            /** @var ImageManager $instance */
            return $instance->make($data);
        }

        /**
         * Creates an empty image canvas
         *
         * @param int $width
         * @param int $height
         * @param mixed $background
         * @return \Intervention\Image\Image
         * @static
         */
        public static function canvas($width, $height, $background = null)
        {
            /** @var ImageManager $instance */
            return $instance->canvas($width, $height, $background);
        }

        /**
         * Create new cached image and run callback
         * (requires additional package intervention/imagecache)
         *
         * @param Closure $callback
         * @param int $lifetime
         * @param boolean $returnObj
         * @return \Image
         * @static
         */
        public static function cache($callback, $lifetime = null, $returnObj = false)
        {
            /** @var ImageManager $instance */
            return $instance->cache($callback, $lifetime, $returnObj);
        }

    }

}

namespace Livewire {
    /**
     *
     *
     * @see \Livewire\LivewireManager
     */
    class Livewire
    {
        /**
         *
         *
         * @static
         */
        public static function component($alias, $viewClass = null)
        {
            /** @var LivewireManager $instance */
            return $instance->component($alias, $viewClass);
        }

        /**
         *
         *
         * @static
         */
        public static function getAlias($class, $default = null)
        {
            /** @var LivewireManager $instance */
            return $instance->getAlias($class, $default);
        }

        /**
         *
         *
         * @static
         */
        public static function getComponentAliases()
        {
            /** @var LivewireManager $instance */
            return $instance->getComponentAliases();
        }

        /**
         *
         *
         * @static
         */
        public static function getClass($alias)
        {
            /** @var LivewireManager $instance */
            return $instance->getClass($alias);
        }

        /**
         *
         *
         * @static
         */
        public static function getInstance($component, $id)
        {
            /** @var LivewireManager $instance */
            return $instance->getInstance($component, $id);
        }

        /**
         *
         *
         * @static
         */
        public static function mount($name, $params = [])
        {
            /** @var LivewireManager $instance */
            return $instance->mount($name, $params);
        }

        /**
         *
         *
         * @static
         */
        public static function dummyMount($id, $tagName)
        {
            /** @var LivewireManager $instance */
            return $instance->dummyMount($id, $tagName);
        }

        /**
         *
         *
         * @static
         */
        public static function test($name, $params = [])
        {
            /** @var LivewireManager $instance */
            return $instance->test($name, $params);
        }

        /**
         *
         *
         * @static
         */
        public static function visit($browser, $class, $queryString = '')
        {
            /** @var LivewireManager $instance */
            return $instance->visit($browser, $class, $queryString);
        }

        /**
         *
         *
         * @static
         */
        public static function actingAs($user, $driver = null)
        {
            /** @var LivewireManager $instance */
            return $instance->actingAs($user, $driver);
        }

        /**
         *
         *
         * @static
         */
        public static function addPersistentMiddleware($middleware)
        {
            /** @var LivewireManager $instance */
            return $instance->addPersistentMiddleware($middleware);
        }

        /**
         *
         *
         * @static
         */
        public static function setPersistentMiddleware($middleware)
        {
            /** @var LivewireManager $instance */
            return $instance->setPersistentMiddleware($middleware);
        }

        /**
         *
         *
         * @static
         */
        public static function getPersistentMiddleware()
        {
            /** @var LivewireManager $instance */
            return $instance->getPersistentMiddleware();
        }

        /**
         *
         *
         * @static
         */
        public static function styles($options = [])
        {
            /** @var LivewireManager $instance */
            return $instance->styles($options);
        }

        /**
         *
         *
         * @static
         */
        public static function scripts($options = [])
        {
            /** @var LivewireManager $instance */
            return $instance->scripts($options);
        }

        /**
         *
         *
         * @static
         */
        public static function isLivewireRequest()
        {
            /** @var LivewireManager $instance */
            return $instance->isLivewireRequest();
        }

        /**
         *
         *
         * @static
         */
        public static function isDefinitelyLivewireRequest()
        {
            /** @var LivewireManager $instance */
            return $instance->isDefinitelyLivewireRequest();
        }

        /**
         *
         *
         * @static
         */
        public static function isProbablyLivewireRequest()
        {
            /** @var LivewireManager $instance */
            return $instance->isProbablyLivewireRequest();
        }

        /**
         *
         *
         * @static
         */
        public static function originalUrl()
        {
            /** @var LivewireManager $instance */
            return $instance->originalUrl();
        }

        /**
         *
         *
         * @static
         */
        public static function originalPath()
        {
            /** @var LivewireManager $instance */
            return $instance->originalPath();
        }

        /**
         *
         *
         * @static
         */
        public static function originalMethod()
        {
            /** @var LivewireManager $instance */
            return $instance->originalMethod();
        }

        /**
         *
         *
         * @static
         */
        public static function getRootElementTagName($dom)
        {
            /** @var LivewireManager $instance */
            return $instance->getRootElementTagName($dom);
        }

        /**
         *
         *
         * @static
         */
        public static function dispatch($event, ...$params)
        {
            /** @var LivewireManager $instance */
            return $instance->dispatch($event, ...$params);
        }

        /**
         *
         *
         * @static
         */
        public static function listen($event, $callback)
        {
            /** @var LivewireManager $instance */
            return $instance->listen($event, $callback);
        }

        /**
         *
         *
         * @static
         */
        public static function isOnVapor()
        {
            /** @var LivewireManager $instance */
            return $instance->isOnVapor();
        }

        /**
         *
         *
         * @static
         */
        public static function isRunningServerless()
        {
            /** @var LivewireManager $instance */
            return $instance->isRunningServerless();
        }

        /**
         *
         *
         * @static
         */
        public static function withQueryParams($queryParams)
        {
            /** @var LivewireManager $instance */
            return $instance->withQueryParams($queryParams);
        }

    }

}

namespace Mcamara\LaravelLocalization\Facades {

    use Illuminate\Config\Repository;

    /**
     *
     *
     */
    class LaravelLocalization
    {
        /**
         * Set and return current locale.
         *
         * @param string $locale Locale to set the App to (optional)
         * @return string Returns locale (if route has any) or null (if route does not have a locale)
         * @static
         */
        public static function setLocale($locale = null)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->setLocale($locale);
        }

        /**
         * Check if $locale is default locale and supposed to be hidden in url
         *
         * @param string $locale Locale to be checked
         * @return boolean Returns true if above requirement are met, otherwise false
         * @static
         */
        public static function isHiddenDefault($locale)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->isHiddenDefault($locale);
        }

        /**
         * Set and return supported locales.
         *
         * @param array $locales Locales that the App supports
         * @static
         */
        public static function setSupportedLocales($locales)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->setSupportedLocales($locales);
        }

        /**
         * Returns an URL adapted to $locale or current locale.
         *
         * @param string $url URL to adapt. If not passed, the current url would be taken.
         * @param string|bool $locale Locale to adapt, false to remove locale
         * @return string URL translated
         * @static
         * @throws UnsupportedLocaleException
         */
        public static function localizeURL($url = null, $locale = null)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->localizeURL($url, $locale);
        }

        /**
         * Returns an URL adapted to $locale.
         *
         * @param string|bool $locale Locale to adapt, false to remove locale
         * @param string|false $url URL to adapt in the current language. If not passed, the current url would be taken.
         * @param array $attributes Attributes to add to the route, if empty, the system would try to extract them from the url.
         * @param bool $forceDefaultLocation Force to show default location even hideDefaultLocaleInURL set as TRUE
         * @return string|false URL translated, False if url does not exist
         * @static
         * @throws UnsupportedLocaleException
         * @throws SupportedLocalesNotDefined
         */
        public static function getLocalizedURL($locale = null, $url = null, $attributes = [], $forceDefaultLocation = false)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getLocalizedURL($locale, $url, $attributes, $forceDefaultLocation);
        }

        /**
         * Returns an URL adapted to the route name and the locale given.
         *
         * @param string|bool $locale Locale to adapt
         * @param string $transKeyName Translation key name of the url to adapt
         * @param array $attributes Attributes for the route (only needed if transKeyName needs them)
         * @param bool $forceDefaultLocation Force to show default location even hideDefaultLocaleInURL set as TRUE
         * @return string|false URL translated
         * @static
         * @throws UnsupportedLocaleException
         * @throws SupportedLocalesNotDefined
         */
        public static function getURLFromRouteNameTranslated($locale, $transKeyName, $attributes = [], $forceDefaultLocation = false)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getURLFromRouteNameTranslated($locale, $transKeyName, $attributes, $forceDefaultLocation);
        }

        /**
         * It returns an URL without locale (if it has it)
         * Convenience function wrapping getLocalizedURL(false).
         *
         * @param string|false $url URL to clean, if false, current url would be taken
         * @return string URL with no locale in path
         * @static
         */
        public static function getNonLocalizedURL($url = null)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getNonLocalizedURL($url);
        }

        /**
         * Returns default locale.
         *
         * @return string
         * @static
         */
        public static function getDefaultLocale()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getDefaultLocale();
        }

        /**
         * Return locales mapping.
         *
         * @return array
         * @static
         */
        public static function getLocalesMapping()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getLocalesMapping();
        }

        /**
         * Returns a locale from the mapping.
         *
         * @param string|null $locale
         * @return string|null
         * @static
         */
        public static function getLocaleFromMapping($locale)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getLocaleFromMapping($locale);
        }

        /**
         * Returns inversed locale from the mapping.
         *
         * @param string|null $locale
         * @return string|null
         * @static
         */
        public static function getInversedLocaleFromMapping($locale)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getInversedLocaleFromMapping($locale);
        }

        /**
         * Return an array of all supported Locales.
         *
         * @return array
         * @static
         * @throws SupportedLocalesNotDefined
         */
        public static function getSupportedLocales()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getSupportedLocales();
        }

        /**
         * Return an array of all supported Locales but in the order the user
         * has specified in the config file. Useful for the language selector.
         *
         * @return array
         * @static
         */
        public static function getLocalesOrder()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getLocalesOrder();
        }

        /**
         * Returns current locale name.
         *
         * @return string current locale name
         * @static
         */
        public static function getCurrentLocaleName()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocaleName();
        }

        /**
         * Returns current locale native name.
         *
         * @return string current locale native name
         * @static
         */
        public static function getCurrentLocaleNative()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocaleNative();
        }

        /**
         * Returns current locale direction.
         *
         * @return string current locale direction
         * @static
         */
        public static function getCurrentLocaleDirection()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocaleDirection();
        }

        /**
         * Returns current locale script.
         *
         * @return string current locale script
         * @static
         */
        public static function getCurrentLocaleScript()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocaleScript();
        }

        /**
         * Returns current language's native reading.
         *
         * @return string current language's native reading
         * @static
         */
        public static function getCurrentLocaleNativeReading()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocaleNativeReading();
        }

        /**
         * Returns current language.
         *
         * @return string current language
         * @static
         */
        public static function getCurrentLocale()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocale();
        }

        /**
         * Returns current regional.
         *
         * @return string current regional
         * @static
         */
        public static function getCurrentLocaleRegional()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getCurrentLocaleRegional();
        }

        /**
         * Returns supported languages language key.
         *
         * @return array keys of supported languages
         * @static
         */
        public static function getSupportedLanguagesKeys()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getSupportedLanguagesKeys();
        }

        /**
         * Check if Locale exists on the supported locales array.
         *
         * @param string|bool $locale string|bool Locale to be checked
         * @return bool is the locale supported?
         * @static
         * @throws SupportedLocalesNotDefined
         */
        public static function checkLocaleInSupportedLocales($locale)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->checkLocaleInSupportedLocales($locale);
        }

        /**
         * Set current route name.
         *
         * @param string $routeName current route name
         * @static
         */
        public static function setRouteName($routeName)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->setRouteName($routeName);
        }

        /**
         * Translate routes and save them to the translated routes array (used in the localize route filter).
         *
         * @param string $routeName Key of the translated string
         * @return string Translated string
         * @static
         */
        public static function transRoute($routeName)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->transRoute($routeName);
        }

        /**
         * Returns the translation key for a given path.
         *
         * @param string $path Path to get the key translated
         * @return string|false Key for translation, false if not exist
         * @static
         */
        public static function getRouteNameFromAPath($path)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getRouteNameFromAPath($path);
        }

        /**
         * Returns the config repository for this instance.
         *
         * @return Repository Configuration repository
         * @static
         */
        public static function getConfigRepository()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getConfigRepository();
        }

        /**
         *
         *
         * @static
         */
        public static function hideUrlAndAcceptHeader()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->hideUrlAndAcceptHeader();
        }

        /**
         * Returns the translation key for a given path.
         *
         * @return bool Returns value of hideDefaultLocaleInURL in config.
         * @static
         */
        public static function hideDefaultLocaleInURL()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->hideDefaultLocaleInURL();
        }

        /**
         * Create an url from the uri.
         *
         * @param string $uri Uri
         * @return string Url for the given uri
         * @static
         */
        public static function createUrlFromUri($uri)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->createUrlFromUri($uri);
        }

        /**
         * Sets the base url for the site.
         *
         * @param string $url Base url for the site
         * @static
         */
        public static function setBaseUrl($url)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->setBaseUrl($url);
        }

        /**
         * Returns serialized translated routes for caching purposes.
         *
         * @return string
         * @static
         */
        public static function getSerializedTranslatedRoutes()
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->getSerializedTranslatedRoutes();
        }

        /**
         * Sets the translated routes list.
         *
         * Only useful from a cached routes context.
         *
         * @param string $serializedRoutes
         * @static
         */
        public static function setSerializedTranslatedRoutes($serializedRoutes)
        {
            /** @var \Mcamara\LaravelLocalization\LaravelLocalization $instance */
            return $instance->setSerializedTranslatedRoutes($serializedRoutes);
        }

    }

}

namespace Yoeunes\Toastr\Facades {
    /**
     *
     *
     */
    class Toastr
    {
        /**
         * Shortcut for adding an error notification.
         *
         * @param string $message The notification's message
         * @param string $title The notification's title
         * @param array $options
         * @return \Toastr
         * @static
         */
        public static function error($message, $title = '', $options = [])
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->error($message, $title, $options);
        }

        /**
         * Shortcut for adding an info notification.
         *
         * @param string $message The notification's message
         * @param string $title The notification's title
         * @param array $options
         * @return \Toastr
         * @static
         */
        public static function info($message, $title = '', $options = [])
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->info($message, $title, $options);
        }

        /**
         * Shortcut for adding a success notification.
         *
         * @param string $message The notification's message
         * @param string $title The notification's title
         * @param array $options
         * @return \Toastr
         * @static
         */
        public static function success($message, $title = '', $options = [])
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->success($message, $title, $options);
        }

        /**
         * Shortcut for adding a warning notification.
         *
         * @param string $message The notification's message
         * @param string $title The notification's title
         * @param array $options
         * @return \Toastr
         * @static
         */
        public static function warning($message, $title = '', $options = [])
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->warning($message, $title, $options);
        }

        /**
         * Add a notification.
         *
         * @param string $type Could be error, info, success, or warning.
         * @param string $message The notification's message
         * @param string $title The notification's title
         * @param array $options
         * @return \Toastr
         * @static
         */
        public static function addNotification($type, $message, $title = '', $options = [])
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->addNotification($type, $message, $title, $options);
        }

        /**
         * Render the notifications' script tag.
         *
         * @return string
         * @static
         */
        public static function render()
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->render();
        }

        /**
         * Get global toastr options.
         *
         * @return string
         * @static
         */
        public static function options()
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->options();
        }

        /**
         *
         *
         * @return string
         * @static
         */
        public static function notificationsAsString()
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->notificationsAsString();
        }

        /**
         * map over all notifications and create an array of toastrs.
         *
         * @return array
         * @static
         */
        public static function notifications()
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->notifications();
        }

        /**
         * Create a single toastr.
         *
         * @param string $type
         * @param string $message
         * @param string|null $title
         * @param string|null $options
         * @return string
         * @static
         */
        public static function toastr($type, $message = '', $title = '', $options = '')
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->toastr($type, $message, $title, $options);
        }

        /**
         * Clear all notifications.
         *
         * @return \Toastr
         * @static
         */
        public static function clear()
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->clear();
        }

        /**
         * Limit the number of displayed toasts.
         *
         * @param int $max
         * @return \Yoeunes\Toastr\Toastr
         * @static
         */
        public static function maxItems($max)
        {
            /** @var \Yoeunes\Toastr\Toastr $instance */
            return $instance->maxItems($max);
        }

    }

}

namespace Illuminate\Http {
    /**
     *
     *
     */
    class Request
    {
        /**
         *
         *
         * @param array $rules
         * @param mixed $params
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static function validate($rules, ...$params)
        {
            return Request::validate($rules, ...$params);
        }

        /**
         *
         *
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return Request::validateWithBag($errorBag, $rules, ...$params);
        }

        /**
         *
         *
         * @param mixed $absolute
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static function hasValidSignature($absolute = true)
        {
            return Request::hasValidSignature($absolute);
        }

        /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static function hasValidRelativeSignature()
        {
            return Request::hasValidRelativeSignature();
        }

    }

}

namespace Illuminate\Testing {

    use Illuminate\Http\Response;

    /**
     *
     *
     * @mixin Response
     */
    class TestResponse
    {
        /**
         *
         *
         * @param mixed $component
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static function assertSeeLivewire($component)
        {
            return TestResponse::assertSeeLivewire($component);
        }

        /**
         *
         *
         * @param mixed $component
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static function assertDontSeeLivewire($component)
        {
            return TestResponse::assertDontSeeLivewire($component);
        }

    }

    /**
     *
     *
     */
    class TestView
    {
        /**
         *
         *
         * @param mixed $component
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static function assertSeeLivewire($component)
        {
            return TestView::assertSeeLivewire($component);
        }

        /**
         *
         *
         * @param mixed $component
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static function assertDontSeeLivewire($component)
        {
            return TestView::assertDontSeeLivewire($component);
        }

    }

}

namespace Illuminate\Routing {
    /**
     *
     *
     * @mixin RouteRegistrar
     */
    class Router
    {
        /**
         *
         *
         * @param mixed $options
         * @static
         * @see \Laravel\Ui\AuthRouteMethods::auth()
         */
        public static function auth($options = [])
        {
            return Router::auth($options);
        }

        /**
         *
         *
         * @see \Laravel\Ui\AuthRouteMethods::resetPassword()
         * @static
         */
        public static function resetPassword()
        {
            return Router::resetPassword();
        }

        /**
         *
         *
         * @see \Laravel\Ui\AuthRouteMethods::confirmPassword()
         * @static
         */
        public static function confirmPassword()
        {
            return Router::confirmPassword();
        }

        /**
         *
         *
         * @see \Laravel\Ui\AuthRouteMethods::emailVerification()
         * @static
         */
        public static function emailVerification()
        {
            return Router::emailVerification();
        }

    }

}

namespace Illuminate\View {
    /**
     *
     *
     */
    class ComponentAttributeBag
    {
        /**
         *
         *
         * @param mixed $name
         * @static
         * @see \Livewire\LivewireServiceProvider::registerViewMacros()
         */
        public static function wire($name)
        {
            return ComponentAttributeBag::wire($name);
        }

    }

    /**
     *
     *
     */
    class View
    {
        /**
         *
         *
         * @param mixed $view
         * @param mixed $params
         * @static
         * @see \Livewire\Macros\ViewMacros::extends()
         */
        public static function extends($view, $params = [])
        {
            return View::extends($view, $params);
        }

        /**
         *
         *
         * @param mixed $view
         * @param mixed $params
         * @static
         * @see \Livewire\Macros\ViewMacros::layout()
         */
        public static function layout($view, $params = [])
        {
            return View::layout($view, $params);
        }

        /**
         *
         *
         * @param mixed $data
         * @static
         * @see \Livewire\Macros\ViewMacros::layoutData()
         */
        public static function layoutData($data = [])
        {
            return View::layoutData($data);
        }

        /**
         *
         *
         * @param mixed $section
         * @static
         * @see \Livewire\Macros\ViewMacros::section()
         */
        public static function section($section)
        {
            return View::section($section);
        }

        /**
         *
         *
         * @param mixed $slot
         * @static
         * @see \Livewire\Macros\ViewMacros::slot()
         */
        public static function slot($slot)
        {
            return View::slot($slot);
        }

    }

}


namespace {

    use Illuminate\Contracts\Pagination\CursorPaginator;
    use Illuminate\Contracts\Pagination\LengthAwarePaginator;
    use Illuminate\Contracts\Pagination\Paginator;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Illuminate\Database\Eloquent\Scope;
    use Illuminate\Database\MultipleRecordsFoundException;
    use Illuminate\Database\Query\Builder;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Database\Query\Grammars\Grammar;
    use Illuminate\Database\Query\Processors\Processor;
    use Illuminate\Database\RecordsNotFoundException;
    use Illuminate\Pagination\Cursor;
    use Illuminate\Support\Collection;
    use Illuminate\Support\LazyCollection;

    class App extends \Illuminate\Support\Facades\App
    {
    }

    class Arr extends \Illuminate\Support\Arr
    {
    }

    class Artisan extends \Illuminate\Support\Facades\Artisan
    {
    }

    class Auth extends \Illuminate\Support\Facades\Auth
    {
    }

    class Blade extends \Illuminate\Support\Facades\Blade
    {
    }

    class Broadcast extends \Illuminate\Support\Facades\Broadcast
    {
    }

    class Bus extends \Illuminate\Support\Facades\Bus
    {
    }

    class Cache extends \Illuminate\Support\Facades\Cache
    {
    }

    class Config extends \Illuminate\Support\Facades\Config
    {
    }

    class Cookie extends \Illuminate\Support\Facades\Cookie
    {
    }

    class Crypt extends \Illuminate\Support\Facades\Crypt
    {
    }

    class DB extends \Illuminate\Support\Facades\DB
    {
    }

    class Eloquent extends Model
    {
        /**
         * Create and return an un-saved model instance.
         *
         * @param array $attributes
         * @return Model|static
         * @static
         */
        public static function make($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->make($attributes);
        }

        /**
         * Register a new global scope.
         *
         * @param string $identifier
         * @param Scope|Closure $scope
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withGlobalScope($identifier, $scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withGlobalScope($identifier, $scope);
        }

        /**
         * Remove a registered global scope.
         *
         * @param Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withoutGlobalScope($scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScope($scope);
        }

        /**
         * Remove all or passed registered global scopes.
         *
         * @param array|null $scopes
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withoutGlobalScopes($scopes = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScopes($scopes);
        }

        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array
         * @static
         */
        public static function removedScopes()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->removedScopes();
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereKey($id)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKey($id);
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereKeyNot($id)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKeyNot($id);
        }

        /**
         * Add a basic where clause to the query.
         *
         * @param Closure|string|array|Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->where($column, $operator, $value, $boolean);
        }

        /**
         * Add a basic where clause to the query, and return the first result.
         *
         * @param Closure|string|array|Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return Model|static|null
         * @static
         */
        public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstWhere($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where" clause to the query.
         *
         * @param Closure|array|string|Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhere($column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhere($column, $operator, $value);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string|Expression $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function latest($column = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->latest($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string|Expression $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function oldest($column = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->oldest($column);
        }

        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function hydrate($items)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hydrate($items);
        }

        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function fromQuery($query, $bindings = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->fromQuery($query, $bindings);
        }

        /**
         * Find a model by its primary key.
         *
         * @param mixed $id
         * @param array $columns
         * @return Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
         * @static
         */
        public static function find($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->find($id, $columns);
        }

        /**
         * Find multiple models by their primary keys.
         *
         * @param Arrayable|array $ids
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function findMany($ids, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findMany($ids, $columns);
        }

        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param mixed $id
         * @param array $columns
         * @return Model|\Illuminate\Database\Eloquent\Collection|static|static[]
         * @throws ModelNotFoundException
         * @static
         */
        public static function findOrFail($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrFail($id, $columns);
        }

        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param mixed $id
         * @param array $columns
         * @return Model|static
         * @static
         */
        public static function findOrNew($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrNew($id, $columns);
        }

        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param array $attributes
         * @param array $values
         * @return Model|static
         * @static
         */
        public static function firstOrNew($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrNew($attributes, $values);
        }

        /**
         * Get the first record matching the attributes or create it.
         *
         * @param array $attributes
         * @param array $values
         * @return Model|static
         * @static
         */
        public static function firstOrCreate($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrCreate($attributes, $values);
        }

        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         * @return Model|static
         * @static
         */
        public static function updateOrCreate($attributes, $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->updateOrCreate($attributes, $values);
        }

        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array $columns
         * @return Model|static
         * @throws ModelNotFoundException
         * @static
         */
        public static function firstOrFail($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrFail($columns);
        }

        /**
         * Execute the query and get the first result or call a callback.
         *
         * @param Closure|array $columns
         * @param Closure|null $callback
         * @return Model|static|mixed
         * @static
         */
        public static function firstOr($columns = [], $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOr($columns, $callback);
        }

        /**
         * Execute the query and get the first result if it's the sole matching record.
         *
         * @param array|string $columns
         * @return Model
         * @throws ModelNotFoundException
         * @throws MultipleRecordsFoundException
         * @static
         */
        public static function sole($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->sole($columns);
        }

        /**
         * Get a single column's value from the first result of a query.
         *
         * @param string|Expression $column
         * @return mixed
         * @static
         */
        public static function value($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->value($column);
        }

        /**
         * Execute the query as a "select" statement.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[]
         * @static
         */
        public static function get($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->get($columns);
        }

        /**
         * Get the hydrated models without eager loading.
         *
         * @param array|string $columns
         * @return Model[]|static[]
         * @static
         */
        public static function getModels($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModels($columns);
        }

        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         * @return array
         * @static
         */
        public static function eagerLoadRelations($models)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eagerLoadRelations($models);
        }

        /**
         * Get a lazy collection for the given query.
         *
         * @return LazyCollection
         * @static
         */
        public static function cursor()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursor();
        }

        /**
         * Get an array with the values of a given column.
         *
         * @param string|Expression $column
         * @param string|null $key
         * @return Collection
         * @static
         */
        public static function pluck($column, $key = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->pluck($column, $key);
        }

        /**
         * Paginate the given query.
         *
         * @param int|null $perPage
         * @param array $columns
         * @param string $pageName
         * @param int|null $page
         * @return LengthAwarePaginator
         * @throws InvalidArgumentException
         * @static
         */
        public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->paginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Paginate the given query into a simple paginator.
         *
         * @param int|null $perPage
         * @param array $columns
         * @param string $pageName
         * @param int|null $page
         * @return Paginator
         * @static
         */
        public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->simplePaginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Paginate the given query into a cursor paginator.
         *
         * @param int|null $perPage
         * @param array $columns
         * @param string $cursorName
         * @param Cursor|string|null $cursor
         * @return CursorPaginator
         * @static
         */
        public static function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursorPaginate($perPage, $columns, $cursorName, $cursor);
        }

        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return Model|$this
         * @static
         */
        public static function create($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->create($attributes);
        }

        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return Model|$this
         * @static
         */
        public static function forceCreate($attributes)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->forceCreate($attributes);
        }

        /**
         * Insert new records or update the existing ones.
         *
         * @param array $values
         * @param array|string $uniqueBy
         * @param array|null $update
         * @return int
         * @static
         */
        public static function upsert($values, $uniqueBy, $update = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->upsert($values, $uniqueBy, $update);
        }

        /**
         * Register a replacement for the default delete function.
         *
         * @param Closure $callback
         * @return void
         * @static
         */
        public static function onDelete($callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            $instance->onDelete($callback);
        }

        /**
         * Call the given local model scopes.
         *
         * @param array|string $scopes
         * @return static|mixed
         * @static
         */
        public static function scopes($scopes)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->scopes($scopes);
        }

        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return static
         * @static
         */
        public static function applyScopes()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->applyScopes();
        }

        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param mixed $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function without($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->without($relations);
        }

        /**
         * Set the relationships that should be eager loaded while removing any previously added eager loading specifications.
         *
         * @param mixed $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withOnly($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withOnly($relations);
        }

        /**
         * Create a new instance of the model being queried.
         *
         * @param array $attributes
         * @return Model|static
         * @static
         */
        public static function newModelInstance($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->newModelInstance($attributes);
        }

        /**
         * Apply query-time casts to the model instance.
         *
         * @param array $casts
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withCasts($casts)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCasts($casts);
        }

        /**
         * Get the underlying query builder instance.
         *
         * @return Builder
         * @static
         */
        public static function getQuery()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getQuery();
        }

        /**
         * Set the underlying query builder instance.
         *
         * @param Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function setQuery($query)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setQuery($query);
        }

        /**
         * Get a base query builder instance.
         *
         * @return Builder
         * @static
         */
        public static function toBase()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->toBase();
        }

        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         * @static
         */
        public static function getEagerLoads()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getEagerLoads();
        }

        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function setEagerLoads($eagerLoad)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setEagerLoads($eagerLoad);
        }

        /**
         * Get the model instance being queried.
         *
         * @return Model|static
         * @static
         */
        public static function getModel()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModel();
        }

        /**
         * Set a model instance for the model being queried.
         *
         * @param Model $model
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function setModel($model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setModel($model);
        }

        /**
         * Get the given macro by name.
         *
         * @param string $name
         * @return Closure
         * @static
         */
        public static function getMacro($name)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getMacro($name);
        }

        /**
         * Checks if a macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMacro($name);
        }

        /**
         * Get the given global macro by name.
         *
         * @param string $name
         * @return Closure
         * @static
         */
        public static function getGlobalMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::getGlobalMacro($name);
        }

        /**
         * Checks if a global macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasGlobalMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::hasGlobalMacro($name);
        }

        /**
         * Clone the Eloquent query builder.
         *
         * @return static
         * @static
         */
        public static function clone()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->clone();
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param Relation|string $relation
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws RuntimeException
         * @static
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->has($relation, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHas($relation, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHas($relation, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string $relation
         * @param string $boolean
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHave($relation, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orDoesntHave($relation)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHave($relation);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereDoesntHave($relation, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHave($relation, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereDoesntHave($relation, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHave($relation, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query.
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMorph($relation, $types, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with an "or".
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHasMorph($relation, $types, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHasMorph($relation, $types, $operator, $count);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query.
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param string $boolean
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHaveMorph($relation, $types, $boolean, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with an "or".
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orDoesntHaveMorph($relation, $types)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHaveMorph($relation, $types);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses.
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHasMorph($relation, $types, $callback, $operator, $count);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHasMorph($relation, $types, $callback, $operator, $count);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses.
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereDoesntHaveMorph($relation, $types, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHaveMorph($relation, $types, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param MorphTo|string $relation
         * @param string|array $types
         * @param Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereDoesntHaveMorph($relation, $types, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHaveMorph($relation, $types, $callback);
        }

        /**
         * Add subselect queries to include an aggregate value for a relationship.
         *
         * @param mixed $relations
         * @param string $column
         * @param string $function
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withAggregate($relations, $column, $function = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAggregate($relations, $column, $function);
        }

        /**
         * Add subselect queries to count the relations.
         *
         * @param mixed $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withCount($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCount($relations);
        }

        /**
         * Add subselect queries to include the max of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withMax($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMax($relation, $column);
        }

        /**
         * Add subselect queries to include the min of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withMin($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMin($relation, $column);
        }

        /**
         * Add subselect queries to include the sum of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withSum($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withSum($relation, $column);
        }

        /**
         * Add subselect queries to include the average of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withAvg($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAvg($relation, $column);
        }

        /**
         * Add subselect queries to include the existence of related models.
         *
         * @param string|array $relation
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withExists($relation)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withExists($relation);
        }

        /**
         * Merge the where constraints from another query to the current query.
         *
         * @param \Illuminate\Database\Eloquent\Builder $from
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function mergeConstraintsFrom($from)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->mergeConstraintsFrom($from);
        }

        /**
         * Explains the query.
         *
         * @return Collection
         * @static
         */
        public static function explain()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->explain();
        }

        /**
         * Chunk the results of the query.
         *
         * @param int $count
         * @param callable $callback
         * @return bool
         * @static
         */
        public static function chunk($count, $callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunk($count, $callback);
        }

        /**
         * Run a map over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         * @return Collection
         * @static
         */
        public static function chunkMap($callback, $count = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkMap($callback, $count);
        }

        /**
         * Execute a callback over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         * @return bool
         * @throws RuntimeException
         * @static
         */
        public static function each($callback, $count = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->each($callback, $count);
        }

        /**
         * Chunk the results of a query by comparing IDs.
         *
         * @param int $count
         * @param callable $callback
         * @param string|null $column
         * @param string|null $alias
         * @return bool
         * @static
         */
        public static function chunkById($count, $callback, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkById($count, $callback, $column, $alias);
        }

        /**
         * Execute a callback over each item while chunking by ID.
         *
         * @param callable $callback
         * @param int $count
         * @param string|null $column
         * @param string|null $alias
         * @return bool
         * @static
         */
        public static function eachById($callback, $count = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eachById($callback, $count, $column, $alias);
        }

        /**
         * Query lazily, by chunks of the given size.
         *
         * @param int $chunkSize
         * @return LazyCollection
         * @throws InvalidArgumentException
         * @static
         */
        public static function lazy($chunkSize = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazy($chunkSize);
        }

        /**
         * Query lazily, by chunking the results of a query by comparing IDs.
         *
         * @param int $count
         * @param string|null $column
         * @param string|null $alias
         * @return LazyCollection
         * @throws InvalidArgumentException
         * @static
         */
        public static function lazyById($chunkSize = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyById($chunkSize, $column, $alias);
        }

        /**
         * Execute the query and get the first result.
         *
         * @param array|string $columns
         * @return Model|object|static|null
         * @static
         */
        public static function first($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->first($columns);
        }

        /**
         * Execute the query and get the first result if it's the sole matching record.
         *
         * @param array|string $columns
         * @return Model|object|static|null
         * @throws RecordsNotFoundException
         * @throws MultipleRecordsFoundException
         * @static
         */
        public static function baseSole($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->baseSole($columns);
        }

        /**
         * Pass the query to a given callback.
         *
         * @param callable $callback
         * @return $this|mixed
         * @static
         */
        public static function tap($callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->tap($callback);
        }

        /**
         * Apply the callback if the given "value" is truthy.
         *
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed
         * @static
         */
        public static function when($value, $callback, $default = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is falsy.
         *
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed
         * @static
         */
        public static function unless($value, $callback, $default = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Set the columns to be selected.
         *
         * @param array|mixed $columns
         * @return Builder
         * @static
         */
        public static function select($columns = [])
        {
            /** @var Builder $instance */
            return $instance->select($columns);
        }

        /**
         * Add a subselect expression to the query.
         *
         * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function selectSub($query, $as)
        {
            /** @var Builder $instance */
            return $instance->selectSub($query, $as);
        }

        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @param array $bindings
         * @return Builder
         * @static
         */
        public static function selectRaw($expression, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->selectRaw($expression, $bindings);
        }

        /**
         * Makes "from" fetch from a subquery.
         *
         * @param Closure|Builder|string $query
         * @param string $as
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function fromSub($query, $as)
        {
            /** @var Builder $instance */
            return $instance->fromSub($query, $as);
        }

        /**
         * Add a raw from clause to the query.
         *
         * @param string $expression
         * @param mixed $bindings
         * @return Builder
         * @static
         */
        public static function fromRaw($expression, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->fromRaw($expression, $bindings);
        }

        /**
         * Add a new select column to the query.
         *
         * @param array|mixed $column
         * @return Builder
         * @static
         */
        public static function addSelect($column)
        {
            /** @var Builder $instance */
            return $instance->addSelect($column);
        }

        /**
         * Force the query to only return distinct results.
         *
         * @param mixed $distinct
         * @return Builder
         * @static
         */
        public static function distinct()
        {
            /** @var Builder $instance */
            return $instance->distinct();
        }

        /**
         * Set the table which the query is targeting.
         *
         * @param Closure|Builder|string $table
         * @param string|null $as
         * @return Builder
         * @static
         */
        public static function from($table, $as = null)
        {
            /** @var Builder $instance */
            return $instance->from($table, $as);
        }

        /**
         * Add a join clause to the query.
         *
         * @param string $table
         * @param Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @param string $type
         * @param bool $where
         * @return Builder
         * @static
         */
        public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            /** @var Builder $instance */
            return $instance->join($table, $first, $operator, $second, $type, $where);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param Closure|string $first
         * @param string $operator
         * @param string $second
         * @param string $type
         * @return Builder
         * @static
         */
        public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
        {
            /** @var Builder $instance */
            return $instance->joinWhere($table, $first, $operator, $second, $type);
        }

        /**
         * Add a subquery join clause to the query.
         *
         * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @param string $type
         * @param bool $where
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            /** @var Builder $instance */
            return $instance->joinSub($query, $as, $first, $operator, $second, $type, $where);
        }

        /**
         * Add a left join to the query.
         *
         * @param string $table
         * @param Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return Builder
         * @static
         */
        public static function leftJoin($table, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->leftJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param Closure|string $first
         * @param string $operator
         * @param string $second
         * @return Builder
         * @static
         */
        public static function leftJoinWhere($table, $first, $operator, $second)
        {
            /** @var Builder $instance */
            return $instance->leftJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a subquery left join to the query.
         *
         * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return Builder
         * @static
         */
        public static function leftJoinSub($query, $as, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->leftJoinSub($query, $as, $first, $operator, $second);
        }

        /**
         * Add a right join to the query.
         *
         * @param string $table
         * @param Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return Builder
         * @static
         */
        public static function rightJoin($table, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->rightJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param Closure|string $first
         * @param string $operator
         * @param string $second
         * @return Builder
         * @static
         */
        public static function rightJoinWhere($table, $first, $operator, $second)
        {
            /** @var Builder $instance */
            return $instance->rightJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a subquery right join to the query.
         *
         * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return Builder
         * @static
         */
        public static function rightJoinSub($query, $as, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->rightJoinSub($query, $as, $first, $operator, $second);
        }

        /**
         * Add a "cross join" clause to the query.
         *
         * @param string $table
         * @param Closure|string|null $first
         * @param string|null $operator
         * @param string|null $second
         * @return Builder
         * @static
         */
        public static function crossJoin($table, $first = null, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->crossJoin($table, $first, $operator, $second);
        }

        /**
         * Add a subquery cross join to the query.
         *
         * @param Closure|Builder|string $query
         * @param string $as
         * @return Builder
         * @static
         */
        public static function crossJoinSub($query, $as)
        {
            /** @var Builder $instance */
            return $instance->crossJoinSub($query, $as);
        }

        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         * @return void
         * @static
         */
        public static function mergeWheres($wheres, $bindings)
        {
            /** @var Builder $instance */
            $instance->mergeWheres($wheres, $bindings);
        }

        /**
         * Prepare the value and operator for a where clause.
         *
         * @param string $value
         * @param string $operator
         * @param bool $useDefault
         * @return array
         * @throws InvalidArgumentException
         * @static
         */
        public static function prepareValueAndOperator($value, $operator, $useDefault = false)
        {
            /** @var Builder $instance */
            return $instance->prepareValueAndOperator($value, $operator, $useDefault);
        }

        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @param string|null $boolean
         * @return Builder
         * @static
         */
        public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereColumn($first, $operator, $second, $boolean);
        }

        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @return Builder
         * @static
         */
        public static function orWhereColumn($first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereColumn($first, $operator, $second);
        }

        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param mixed $bindings
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereRaw($sql, $bindings = [], $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param mixed $bindings
         * @return Builder
         * @static
         */
        public static function orWhereRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->orWhereRaw($sql, $bindings);
        }

        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereIn($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return Builder
         * @static
         */
        public static function orWhereIn($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereIn($column, $values);
        }

        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereNotIn($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotIn($column, $values, $boolean);
        }

        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return Builder
         * @static
         */
        public static function orWhereNotIn($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotIn($column, $values);
        }

        /**
         * Add a "where in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param Arrayable|array $values
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereIntegerInRaw($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param Arrayable|array $values
         * @return Builder
         * @static
         */
        public static function orWhereIntegerInRaw($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereIntegerInRaw($column, $values);
        }

        /**
         * Add a "where not in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param Arrayable|array $values
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereIntegerNotInRaw($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereIntegerNotInRaw($column, $values, $boolean);
        }

        /**
         * Add an "or where not in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param Arrayable|array $values
         * @return Builder
         * @static
         */
        public static function orWhereIntegerNotInRaw($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereIntegerNotInRaw($column, $values);
        }

        /**
         * Add a "where null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereNull($columns, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereNull($columns, $boolean, $not);
        }

        /**
         * Add an "or where null" clause to the query.
         *
         * @param string|array $column
         * @return Builder
         * @static
         */
        public static function orWhereNull($column)
        {
            /** @var Builder $instance */
            return $instance->orWhereNull($column);
        }

        /**
         * Add a "where not null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereNotNull($columns, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotNull($columns, $boolean);
        }

        /**
         * Add a where between statement to the query.
         *
         * @param string|Expression $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereBetween($column, $values, $boolean, $not);
        }

        /**
         * Add a where between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereBetweenColumns($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereBetweenColumns($column, $values, $boolean, $not);
        }

        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return Builder
         * @static
         */
        public static function orWhereBetween($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereBetween($column, $values);
        }

        /**
         * Add an or where between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @return Builder
         * @static
         */
        public static function orWhereBetweenColumns($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereBetweenColumns($column, $values);
        }

        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereNotBetween($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotBetween($column, $values, $boolean);
        }

        /**
         * Add a where not between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereNotBetweenColumns($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotBetweenColumns($column, $values, $boolean);
        }

        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return Builder
         * @static
         */
        public static function orWhereNotBetween($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotBetween($column, $values);
        }

        /**
         * Add an or where not between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @return Builder
         * @static
         */
        public static function orWhereNotBetweenColumns($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotBetweenColumns($column, $values);
        }

        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         * @return Builder
         * @static
         */
        public static function orWhereNotNull($column)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotNull($column);
        }

        /**
         * Add a "where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereDate($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereDate($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @return Builder
         * @static
         */
        public static function orWhereDate($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereDate($column, $operator, $value);
        }

        /**
         * Add a "where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereTime($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereTime($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @return Builder
         * @static
         */
        public static function orWhereTime($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereTime($column, $operator, $value);
        }

        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereDay($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereDay($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @return Builder
         * @static
         */
        public static function orWhereDay($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereDay($column, $operator, $value);
        }

        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereMonth($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|null $value
         * @return Builder
         * @static
         */
        public static function orWhereMonth($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereMonth($column, $operator, $value);
        }

        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|int|null $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereYear($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereYear($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param DateTimeInterface|string|int|null $value
         * @return Builder
         * @static
         */
        public static function orWhereYear($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereYear($column, $operator, $value);
        }

        /**
         * Add a nested where statement to the query.
         *
         * @param Closure $callback
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereNested($callback, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNested($callback, $boolean);
        }

        /**
         * Create a new query instance for nested where condition.
         *
         * @return Builder
         * @static
         */
        public static function forNestedWhere()
        {
            /** @var Builder $instance */
            return $instance->forNestedWhere();
        }

        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param Builder $query
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function addNestedWhereQuery($query, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->addNestedWhereQuery($query, $boolean);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param Closure $callback
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereExists($callback, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereExists($callback, $boolean, $not);
        }

        /**
         * Add an or exists clause to the query.
         *
         * @param Closure $callback
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function orWhereExists($callback, $not = false)
        {
            /** @var Builder $instance */
            return $instance->orWhereExists($callback, $not);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param Closure $callback
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereNotExists($callback, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotExists($callback, $boolean);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param Closure $callback
         * @return Builder
         * @static
         */
        public static function orWhereNotExists($callback)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotExists($callback);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param Builder $query
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->addWhereExistsQuery($query, $boolean, $not);
        }

        /**
         * Adds a where condition using row values.
         *
         * @param array $columns
         * @param string $operator
         * @param array $values
         * @param string $boolean
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function whereRowValues($columns, $operator, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereRowValues($columns, $operator, $values, $boolean);
        }

        /**
         * Adds an or where condition using row values.
         *
         * @param array $columns
         * @param string $operator
         * @param array $values
         * @return Builder
         * @static
         */
        public static function orWhereRowValues($columns, $operator, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereRowValues($columns, $operator, $values);
        }

        /**
         * Add a "where JSON contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function whereJsonContains($column, $value, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereJsonContains($column, $value, $boolean, $not);
        }

        /**
         * Add an "or where JSON contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @return Builder
         * @static
         */
        public static function orWhereJsonContains($column, $value)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonContains($column, $value);
        }

        /**
         * Add a "where JSON not contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereJsonDoesntContain($column, $value, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereJsonDoesntContain($column, $value, $boolean);
        }

        /**
         * Add an "or where JSON not contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @return Builder
         * @static
         */
        public static function orWhereJsonDoesntContain($column, $value)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonDoesntContain($column, $value);
        }

        /**
         * Add a "where JSON length" clause to the query.
         *
         * @param string $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function whereJsonLength($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereJsonLength($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where JSON length" clause to the query.
         *
         * @param string $column
         * @param mixed $operator
         * @param mixed $value
         * @return Builder
         * @static
         */
        public static function orWhereJsonLength($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonLength($column, $operator, $value);
        }

        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param array $parameters
         * @return Builder
         * @static
         */
        public static function dynamicWhere($method, $parameters)
        {
            /** @var Builder $instance */
            return $instance->dynamicWhere($method, $parameters);
        }

        /**
         * Add a "group by" clause to the query.
         *
         * @param array|string $groups
         * @return Builder
         * @static
         */
        public static function groupBy(...$groups)
        {
            /** @var Builder $instance */
            return $instance->groupBy(...$groups);
        }

        /**
         * Add a raw groupBy clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return Builder
         * @static
         */
        public static function groupByRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->groupByRaw($sql, $bindings);
        }

        /**
         * Add a "having" clause to the query.
         *
         * @param string $column
         * @param string|null $operator
         * @param string|null $value
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->having($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or having" clause to the query.
         *
         * @param string $column
         * @param string|null $operator
         * @param string|null $value
         * @return Builder
         * @static
         */
        public static function orHaving($column, $operator = null, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orHaving($column, $operator, $value);
        }

        /**
         * Add a "having between " clause to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return Builder
         * @static
         */
        public static function havingBetween($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->havingBetween($column, $values, $boolean, $not);
        }

        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return Builder
         * @static
         */
        public static function havingRaw($sql, $bindings = [], $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->havingRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return Builder
         * @static
         */
        public static function orHavingRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->orHavingRaw($sql, $bindings);
        }

        /**
         * Add an "order by" clause to the query.
         *
         * @param Closure|Builder|Expression|string $column
         * @param string $direction
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function orderBy($column, $direction = 'asc')
        {
            /** @var Builder $instance */
            return $instance->orderBy($column, $direction);
        }

        /**
         * Add a descending "order by" clause to the query.
         *
         * @param Closure|Builder|Expression|string $column
         * @return Builder
         * @static
         */
        public static function orderByDesc($column)
        {
            /** @var Builder $instance */
            return $instance->orderByDesc($column);
        }

        /**
         * Put the query's results in random order.
         *
         * @param string $seed
         * @return Builder
         * @static
         */
        public static function inRandomOrder($seed = '')
        {
            /** @var Builder $instance */
            return $instance->inRandomOrder($seed);
        }

        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return Builder
         * @static
         */
        public static function orderByRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->orderByRaw($sql, $bindings);
        }

        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         * @return Builder
         * @static
         */
        public static function skip($value)
        {
            /** @var Builder $instance */
            return $instance->skip($value);
        }

        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         * @return Builder
         * @static
         */
        public static function offset($value)
        {
            /** @var Builder $instance */
            return $instance->offset($value);
        }

        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         * @return Builder
         * @static
         */
        public static function take($value)
        {
            /** @var Builder $instance */
            return $instance->take($value);
        }

        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         * @return Builder
         * @static
         */
        public static function limit($value)
        {
            /** @var Builder $instance */
            return $instance->limit($value);
        }

        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         * @return Builder
         * @static
         */
        public static function forPage($page, $perPage = 15)
        {
            /** @var Builder $instance */
            return $instance->forPage($page, $perPage);
        }

        /**
         * Constrain the query to the previous "page" of results before a given ID.
         *
         * @param int $perPage
         * @param int|null $lastId
         * @param string $column
         * @return Builder
         * @static
         */
        public static function forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
        {
            /** @var Builder $instance */
            return $instance->forPageBeforeId($perPage, $lastId, $column);
        }

        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param int $perPage
         * @param int|null $lastId
         * @param string $column
         * @return Builder
         * @static
         */
        public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
        {
            /** @var Builder $instance */
            return $instance->forPageAfterId($perPage, $lastId, $column);
        }

        /**
         * Remove all existing orders and optionally add a new order.
         *
         * @param Closure|Builder|Expression|string|null $column
         * @param string $direction
         * @return Builder
         * @static
         */
        public static function reorder($column = null, $direction = 'asc')
        {
            /** @var Builder $instance */
            return $instance->reorder($column, $direction);
        }

        /**
         * Add a union statement to the query.
         *
         * @param Builder|Closure $query
         * @param bool $all
         * @return Builder
         * @static
         */
        public static function union($query, $all = false)
        {
            /** @var Builder $instance */
            return $instance->union($query, $all);
        }

        /**
         * Add a union all statement to the query.
         *
         * @param Builder|Closure $query
         * @return Builder
         * @static
         */
        public static function unionAll($query)
        {
            /** @var Builder $instance */
            return $instance->unionAll($query);
        }

        /**
         * Lock the selected rows in the table.
         *
         * @param string|bool $value
         * @return Builder
         * @static
         */
        public static function lock($value = true)
        {
            /** @var Builder $instance */
            return $instance->lock($value);
        }

        /**
         * Lock the selected rows in the table for updating.
         *
         * @return Builder
         * @static
         */
        public static function lockForUpdate()
        {
            /** @var Builder $instance */
            return $instance->lockForUpdate();
        }

        /**
         * Share lock the selected rows in the table.
         *
         * @return Builder
         * @static
         */
        public static function sharedLock()
        {
            /** @var Builder $instance */
            return $instance->sharedLock();
        }

        /**
         * Register a closure to be invoked before the query is executed.
         *
         * @param callable $callback
         * @return Builder
         * @static
         */
        public static function beforeQuery($callback)
        {
            /** @var Builder $instance */
            return $instance->beforeQuery($callback);
        }

        /**
         * Invoke the "before query" modification callbacks.
         *
         * @return void
         * @static
         */
        public static function applyBeforeQueryCallbacks()
        {
            /** @var Builder $instance */
            $instance->applyBeforeQueryCallbacks();
        }

        /**
         * Get the SQL representation of the query.
         *
         * @return string
         * @static
         */
        public static function toSql()
        {
            /** @var Builder $instance */
            return $instance->toSql();
        }

        /**
         * Get the count of the total records for the paginator.
         *
         * @param array $columns
         * @return int
         * @static
         */
        public static function getCountForPagination($columns = [])
        {
            /** @var Builder $instance */
            return $instance->getCountForPagination($columns);
        }

        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         * @return string
         * @static
         */
        public static function implode($column, $glue = '')
        {
            /** @var Builder $instance */
            return $instance->implode($column, $glue);
        }

        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function exists()
        {
            /** @var Builder $instance */
            return $instance->exists();
        }

        /**
         * Determine if no rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function doesntExist()
        {
            /** @var Builder $instance */
            return $instance->doesntExist();
        }

        /**
         * Execute the given callback if no rows exist for the current query.
         *
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function existsOr($callback)
        {
            /** @var Builder $instance */
            return $instance->existsOr($callback);
        }

        /**
         * Execute the given callback if rows exist for the current query.
         *
         * @param Closure $callback
         * @return mixed
         * @static
         */
        public static function doesntExistOr($callback)
        {
            /** @var Builder $instance */
            return $instance->doesntExistOr($callback);
        }

        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         * @return int
         * @static
         */
        public static function count($columns = '*')
        {
            /** @var Builder $instance */
            return $instance->count($columns);
        }

        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function min($column)
        {
            /** @var Builder $instance */
            return $instance->min($column);
        }

        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function max($column)
        {
            /** @var Builder $instance */
            return $instance->max($column);
        }

        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function sum($column)
        {
            /** @var Builder $instance */
            return $instance->sum($column);
        }

        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function avg($column)
        {
            /** @var Builder $instance */
            return $instance->avg($column);
        }

        /**
         * Alias for the "avg" method.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function average($column)
        {
            /** @var Builder $instance */
            return $instance->average($column);
        }

        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return mixed
         * @static
         */
        public static function aggregate($function, $columns = [])
        {
            /** @var Builder $instance */
            return $instance->aggregate($function, $columns);
        }

        /**
         * Execute a numeric aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return float|int
         * @static
         */
        public static function numericAggregate($function, $columns = [])
        {
            /** @var Builder $instance */
            return $instance->numericAggregate($function, $columns);
        }

        /**
         * Insert new records into the database.
         *
         * @param array $values
         * @return bool
         * @static
         */
        public static function insert($values)
        {
            /** @var Builder $instance */
            return $instance->insert($values);
        }

        /**
         * Insert new records into the database while ignoring errors.
         *
         * @param array $values
         * @return int
         * @static
         */
        public static function insertOrIgnore($values)
        {
            /** @var Builder $instance */
            return $instance->insertOrIgnore($values);
        }

        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array $values
         * @param string|null $sequence
         * @return int
         * @static
         */
        public static function insertGetId($values, $sequence = null)
        {
            /** @var Builder $instance */
            return $instance->insertGetId($values, $sequence);
        }

        /**
         * Insert new records into the table using a subquery.
         *
         * @param array $columns
         * @param Closure|Builder|string $query
         * @return int
         * @static
         */
        public static function insertUsing($columns, $query)
        {
            /** @var Builder $instance */
            return $instance->insertUsing($columns, $query);
        }

        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         * @return bool
         * @static
         */
        public static function updateOrInsert($attributes, $values = [])
        {
            /** @var Builder $instance */
            return $instance->updateOrInsert($attributes, $values);
        }

        /**
         * Run a truncate statement on the table.
         *
         * @return void
         * @static
         */
        public static function truncate()
        {
            /** @var Builder $instance */
            $instance->truncate();
        }

        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         * @return Expression
         * @static
         */
        public static function raw($value)
        {
            /** @var Builder $instance */
            return $instance->raw($value);
        }

        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            /** @var Builder $instance */
            return $instance->getBindings();
        }

        /**
         * Get the raw array of bindings.
         *
         * @return array
         * @static
         */
        public static function getRawBindings()
        {
            /** @var Builder $instance */
            return $instance->getRawBindings();
        }

        /**
         * Set the bindings on the query builder.
         *
         * @param array $bindings
         * @param string $type
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function setBindings($bindings, $type = 'where')
        {
            /** @var Builder $instance */
            return $instance->setBindings($bindings, $type);
        }

        /**
         * Add a binding to the query.
         *
         * @param mixed $value
         * @param string $type
         * @return Builder
         * @throws InvalidArgumentException
         * @static
         */
        public static function addBinding($value, $type = 'where')
        {
            /** @var Builder $instance */
            return $instance->addBinding($value, $type);
        }

        /**
         * Merge an array of bindings into our bindings.
         *
         * @param Builder $query
         * @return Builder
         * @static
         */
        public static function mergeBindings($query)
        {
            /** @var Builder $instance */
            return $instance->mergeBindings($query);
        }

        /**
         * Remove all of the expressions from a list of bindings.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function cleanBindings($bindings)
        {
            /** @var Builder $instance */
            return $instance->cleanBindings($bindings);
        }

        /**
         * Get the database query processor instance.
         *
         * @return Processor
         * @static
         */
        public static function getProcessor()
        {
            /** @var Builder $instance */
            return $instance->getProcessor();
        }

        /**
         * Get the query grammar instance.
         *
         * @return Grammar
         * @static
         */
        public static function getGrammar()
        {
            /** @var Builder $instance */
            return $instance->getGrammar();
        }

        /**
         * Use the write pdo for query.
         *
         * @return Builder
         * @static
         */
        public static function useWritePdo()
        {
            /** @var Builder $instance */
            return $instance->useWritePdo();
        }

        /**
         * Clone the query without the given properties.
         *
         * @param array $properties
         * @return static
         * @static
         */
        public static function cloneWithout($properties)
        {
            /** @var Builder $instance */
            return $instance->cloneWithout($properties);
        }

        /**
         * Clone the query without the given bindings.
         *
         * @param array $except
         * @return static
         * @static
         */
        public static function cloneWithoutBindings($except)
        {
            /** @var Builder $instance */
            return $instance->cloneWithoutBindings($except);
        }

        /**
         * Dump the current SQL and bindings.
         *
         * @return Builder
         * @static
         */
        public static function dump()
        {
            /** @var Builder $instance */
            return $instance->dump();
        }

        /**
         * Die and dump the current SQL and bindings.
         *
         * @return void
         * @static
         */
        public static function dd()
        {
            /** @var Builder $instance */
            $instance->dd();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            Builder::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            Builder::mixin($mixin, $replace);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var Builder $instance */
            return $instance->macroCall($method, $parameters);
        }
    }

    class Event extends \Illuminate\Support\Facades\Event
    {
    }

    class File extends \Illuminate\Support\Facades\File
    {
    }

    class Gate extends \Illuminate\Support\Facades\Gate
    {
    }

    class Hash extends \Illuminate\Support\Facades\Hash
    {
    }

    class Http extends \Illuminate\Support\Facades\Http
    {
    }

    class Lang extends \Illuminate\Support\Facades\Lang
    {
    }

    class Log extends \Illuminate\Support\Facades\Log
    {
    }

    class Mail extends \Illuminate\Support\Facades\Mail
    {
    }

    class Notification extends \Illuminate\Support\Facades\Notification
    {
    }

    class Password extends \Illuminate\Support\Facades\Password
    {
    }

    class Queue extends \Illuminate\Support\Facades\Queue
    {
    }

    class Redirect extends \Illuminate\Support\Facades\Redirect
    {
    }

    class Request extends \Illuminate\Support\Facades\Request
    {
    }

    class Response extends \Illuminate\Support\Facades\Response
    {
    }

    class Route extends \Illuminate\Support\Facades\Route
    {
    }

    class Schema extends \Illuminate\Support\Facades\Schema
    {
    }

    class Session extends \Illuminate\Support\Facades\Session
    {
    }

    class Storage extends \Illuminate\Support\Facades\Storage
    {
    }

    class Str extends \Illuminate\Support\Str
    {
    }

    class URL extends \Illuminate\Support\Facades\URL
    {
    }

    class Validator extends \Illuminate\Support\Facades\Validator
    {
    }

    class View extends \Illuminate\Support\Facades\View
    {
    }

    class Flare extends \Facade\Ignition\Facades\Flare
    {
    }

    class Image extends \Intervention\Image\Facades\Image
    {
    }

    class Livewire extends \Livewire\Livewire
    {
    }

    class LaravelLocalization extends \Mcamara\LaravelLocalization\Facades\LaravelLocalization
    {
    }

    class Toastr extends \Yoeunes\Toastr\Facades\Toastr
    {
    }

}




