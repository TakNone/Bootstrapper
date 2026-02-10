# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 222

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
			user_id : -5358655220566012853,
		),
		date : 41,
		active_date : 36,
		source : 15,
		volume : 25,
		about : 'jQgniSG0FZAmtCxO',
		raise_hand_rating : -2133885414255468140,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'CKeRFPV4Hk2pjX9N',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'KkZ2rAO3ULRPzSNt',
					sources : array(93),
				),
			),
			audio_source : 15,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'YPfVh0wDigv4pCct',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'dB2jFQNZy4k0VU7E',
					sources : array(83),
				),
			),
			audio_source : 10,
		),
		paid_stars_total : -6419093636867760405,
	),
);
```