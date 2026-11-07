# phone.groupCallStreamChannels

**Description** : *Contains the available channels of an RTMP\-mode group call, see playing an RTMP livestream &raquo;*

**Layer** : 233

```tl
phone.groupCallStreamChannels#d0e482b2 channels:Vector<GroupCallStreamChannel> = phone.GroupCallStreamChannels;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channels</mark> | [`Vector<GroupCallStreamChannel>`](type/GroupCallStreamChannel) | Available RTMP stream channels; may be empty while the external publisher is not sending media |

---

## Type

[phone.GroupCallStreamChannels](type/phone.GroupCallStreamChannels)

---

## Example

```php
$phoneGroupCallStreamChannels = $client->phone->groupCallStreamChannels(
	channels : array(
		$client->groupCallStreamChannel(
			channel : 96,
			scale : 52,
			last_timestamp_ms : -1047588265151954502,
		),
	),
);
```