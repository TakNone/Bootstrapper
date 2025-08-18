# messages.getAttachMenuBots

**Description** : *Returns installed attachment menu bot mini apps &raquo;*

**Layer** : 211

```tl
messages.getAttachMenuBots#16fcc2cb hash:long = AttachMenuBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[AttachMenuBots](type/AttachMenuBots)

---

## Example

```php
$attachMenuBots = $client->messages->getAttachMenuBots(
	hash : 5281327145318663808,
);
```