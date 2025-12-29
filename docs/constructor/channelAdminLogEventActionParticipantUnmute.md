# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 218

```tl
channelAdminLogEventActionParticipantUnmute#e64429c0 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant that was unmuted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantUnmute(
	participant : $client->groupCallParticipant(
		muted : true,
		left : true,
		can_self_unmute : true,
		just_joined : true,
		versioned : true,
		min : true,
		muted_by_you : true,
		volume_by_admin : true,
		self : true,
		video_joined : true,
		peer : $client->peerUser(
			user_id : 5364033773442361377,
		),
		date : 25,
		active_date : 74,
		source : 85,
		volume : 76,
		about : '6eVvHk8ZuyD9oBLw',
		raise_hand_rating : -2674498898620843523,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'rz6F8KydsLSUfnoX',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'ABwmoEu4aJc2QT1y',
					sources : array(67),
				),
			),
			audio_source : 35,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'tXbGSZ8V9Ry2Kpmf',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'UMDJInBfcgsy8SdT',
					sources : array(19),
				),
			),
			audio_source : 46,
		),
		paid_stars_total : 7268631704092154117,
	),
);
```