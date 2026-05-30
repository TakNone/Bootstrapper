# groupCallParticipantVideo

**Description** : *Info about a video stream*

**Layer** : 222

```tl
groupCallParticipantVideo#67753ac8 flags:# paused:flags.0?true endpoint:string source_groups:Vector<GroupCallParticipantVideoSourceGroup> audio_source:flags.1?int = GroupCallParticipantVideo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **paused** | [`flags.0?true`](type/true) | Whether the stream is currently paused |
| <mark>endpoint</mark> | [`string`](type/string) | Endpoint |
| <mark>source_groups</mark> | [`Vector<GroupCallParticipantVideoSourceGroup>`](type/GroupCallParticipantVideoSourceGroup) | Source groups |
| **audio_source** | [`flags.1?int`](type/int) | Audio source ID |

---

## Type

[GroupCallParticipantVideo](type/GroupCallParticipantVideo)

---

## Example

```php
$groupCallParticipantVideo = $client->groupCallParticipantVideo(
	paused : true,
	endpoint : 'cp4GgiNI8SF1zf90',
	source_groups : array(
		$client->groupCallParticipantVideoSourceGroup(
			semantics : 'JMU5KiLwTPXxcke6',
			sources : array(68),
		),
	),
	audio_source : 68,
);
```