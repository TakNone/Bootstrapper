# updateConfig

**Description** : *The server\-side configuration has changed; the client should re\-fetch the config using help\.getConfig and help\.getAppConfig*

**Layer** : 218

```tl
updateConfig#a229dd06 = Update;
```

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateConfig();
```