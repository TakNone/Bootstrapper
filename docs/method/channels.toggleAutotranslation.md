# channels.toggleAutotranslation

**Layer** : 211

```tl
channels.toggleAutotranslation#167fc0a1 channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>enabled</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->channels->toggleAutotranslation(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
);
```