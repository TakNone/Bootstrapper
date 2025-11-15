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
			user_id : 6875810048741927178,
		),
		date : 58,
		active_date : 100,
		source : 99,
		volume : 1,
		about : 'okq5jXCDyuRQYgar',
		raise_hand_rating : 6922433920943586265,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'mi5z6CAj7HlLFEn9',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '0YCnmZf9eGxMTU5R',
					sources : array(68),
				),
			),
			audio_source : 96,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'taizCl4RjFnZVOb9',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'BnfRuCYlmW5XkU27',
					sources : array(55),
				),
			),
			audio_source : 76,
		),
		paid_stars_total : -3521336944753390331,
	),
);
```