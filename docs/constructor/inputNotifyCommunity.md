# inputNotifyCommunity

**Layer** : 229

```tl
inputNotifyCommunity#27bb1adc community:InputChannel = InputNotifyPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |

---

## Type

[InputNotifyPeer](type/InputNotifyPeer)

---

## Example

```php
$inputNotifyPeer = $client->inputNotifyCommunity(
	community : $client->get_input_channel(channel : '@LiveProto'),
);
```