# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 229

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
			user_id : 2744780954340770616,
		),
		date : 97,
		active_date : 92,
		source : 52,
		volume : 87,
		about : 'vYLTjVPsmg2lZxDC',
		raise_hand_rating : 2527969650906082461,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'yjDTJkqU7SZp9gaF',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'ZtaYCvl70guMwKIQ',
					sources : array(90),
				),
			),
			audio_source : 73,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'jlTrke6HO1iC0a2g',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'YdK7uQep8TEGWUvb',
					sources : array(17),
				),
			),
			audio_source : 48,
		),
		paid_stars_total : -8338501397408708562,
	),
);
```