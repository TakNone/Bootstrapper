# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 218

```tl
channelAdminLogEventActionParticipantVolume#3e7f6847 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant whose volume was changed |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantVolume(
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
			user_id : -5025075339500138736,
		),
		date : 0,
		active_date : 90,
		source : 62,
		volume : 4,
		about : 'uJnfqPF19UOKtlCx',
		raise_hand_rating : 270463780277785886,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'du7ZTRhXNVfxHUQ2',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'tTkIjmP594zrwhEB',
					sources : array(17),
				),
			),
			audio_source : 32,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '2pPwbvOjt7hGC5lB',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'XchG2ebdMCJ4jNzW',
					sources : array(81),
				),
			),
			audio_source : 56,
		),
		paid_stars_total : 3931990273254406650,
	),
);
```