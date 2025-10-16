# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 216

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
			user_id : 2366389773068997478,
		),
		date : 69,
		active_date : 12,
		source : 68,
		volume : 22,
		about : 'iXowRfDzLdvjO8Cl',
		raise_hand_rating : -3900395396448154619,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'XDdYZt1J0jIRGMuq',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 8,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'a7uitwoTQqCpkcV6',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 0,
		),
	),
);
```