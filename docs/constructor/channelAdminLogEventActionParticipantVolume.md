# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 225

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
			user_id : 1666259606050908219,
		),
		date : 68,
		active_date : 29,
		source : 64,
		volume : 81,
		about : 'hxz38JGvwVFL7qXQ',
		raise_hand_rating : 8593355672459467330,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'GWSAX3FguC8fDbMc',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'EqmAsR5YBzwkd0Kb',
					sources : array(32),
				),
			),
			audio_source : 48,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'TwZn5hApaiBkxKX2',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '1zg2YTqy7NEaX9lh',
					sources : array(44),
				),
			),
			audio_source : 52,
		),
		paid_stars_total : 8598640969514166021,
	),
);
```