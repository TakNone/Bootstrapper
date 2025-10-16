# channels.toggleAutotranslation

**Description** : *Toggle autotranslation in a channel, for all users: see here &raquo; for more info*

**Layer** : 216

```tl
channels.toggleAutotranslation#167fc0a1 channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel where to toggle autotranslation |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Whether to enable or disable autotranslation |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$updates = $client->channels->toggleAutotranslation(
	channel : $client->inputChannelEmpty(),
	enabled : false,
);
```