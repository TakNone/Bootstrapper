# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 218

```tl
channelAdminLogEventActionParticipantMute#f92424d2 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant that was muted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantMute(
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
			user_id : 4169252829036952968,
		),
		date : 75,
		active_date : 12,
		source : 10,
		volume : 92,
		about : 'huk3pLvoxwI5TiGr',
		raise_hand_rating : -2881260002813734209,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'vo9Vh2JzbpyUg51I',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'YcdbOW0Q5qvCSGN2',
					sources : array(63),
				),
			),
			audio_source : 26,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'ly8CMOSEQ3KRgc4G',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'YRfuVwps9eLbSzUk',
					sources : array(43),
				),
			),
			audio_source : 36,
		),
		paid_stars_total : -3060016211671412893,
	),
);
```