# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 214

```tl
updateGroupCallParticipants#f2ebdb4e call:InputGroupCall participants:Vector<GroupCallParticipant> version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | New participant list |
| <mark>version</mark> | [`int`](type/int) | Version |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallParticipants(
	call : $client->inputGroupCall(
		id : -4456574479007315233,
		access_hash : 7161911007162094584,
	),
	participants : array(
		$client->groupCallParticipant(
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
				user_id : -4356589345607227043,
			),
			date : 1,
			active_date : 60,
			source : 6,
			volume : 56,
			about : 'oCX9wNIMVTtnJZbg',
			raise_hand_rating : -4506022707711971308,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'AQf3DRgbhFrz4x9B',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 94,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'zueytWDRpLlVJsX8',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 92,
			),
		),
	),
	version : 4,
);
```