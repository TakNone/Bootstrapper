# messages.getAvailableEffects

**Description** : *Fetch the full list of usable animated message effects &raquo;*

**Layer** : 218

```tl
messages.getAvailableEffects#dea20a39 hash:int = messages.AvailableEffects;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[messages.AvailableEffects](type/messages.AvailableEffects)

---

## Example

```php
$messagesAvailableEffects = $client->messages->getAvailableEffects(
	hash : 0,
);
```