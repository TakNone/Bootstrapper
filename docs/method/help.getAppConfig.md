# help.getAppConfig

**Description** : *Get app\-specific configuration, see client configuration for more info on the result*

**Layer** : 216

```tl
help.getAppConfig#61e3f854 hash:int = help.AppConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[help.AppConfig](type/help.AppConfig)

---

## Example

```php
$helpAppConfig = $client->help->getAppConfig(
	hash : 0,
);
```