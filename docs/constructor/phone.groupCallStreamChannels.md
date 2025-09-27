# phone.groupCallStreamChannels

**Description** : *Info about RTMP streams in a group call or livestream*

**Layer** : 214

```tl
phone.groupCallStreamChannels#d0e482b2 channels:Vector<GroupCallStreamChannel> = phone.GroupCallStreamChannels;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channels</mark> | [`Vector<GroupCallStreamChannel>`](type/GroupCallStreamChannel) | RTMP streams |

---

## Type

[phone.GroupCallStreamChannels](type/phone.GroupCallStreamChannels)

---

## Example

```php
$phoneGroupCallStreamChannels = $client->phone->groupCallStreamChannels(
	channels : array(
		$client->groupCallStreamChannel(
			channel : 88,
			scale : 2,
			last_timestamp_ms : -6019201420052729318,
		),
	),
);
```