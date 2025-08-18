# help.appConfig

**Description** : *Contains various client configuration parameters*

**Layer** : 211

```tl
help.appConfig#dd18782e hash:int config:JSONValue = help.AppConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>config</mark> | [`JSONValue`](type/JSONValue) | Client configuration parameters |

---

## Type

[help.AppConfig](type/help.AppConfig)

---

## Example

```php
$helpAppConfig = $client->help->appConfig(
	hash : 92,
	config : $client->jsonNull(),
);
```