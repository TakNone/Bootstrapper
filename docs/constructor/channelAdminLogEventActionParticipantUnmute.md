# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 229

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
			user_id : -1788390503394281412,
		),
		date : 84,
		active_date : 24,
		source : 0,
		volume : 31,
		about : 'EhVldMbJIXqHxn3t',
		raise_hand_rating : 8370439036181644803,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'Xw5HDrB806LFbGJj',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'eRqpCkjo0usKda7U',
					sources : array(100),
				),
			),
			audio_source : 68,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'pwTROZCLHiF6czEd',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'ZB1LHKImMuFnlhWd',
					sources : array(4),
				),
			),
			audio_source : 49,
		),
		paid_stars_total : 1091460890795675661,
	),
);
```