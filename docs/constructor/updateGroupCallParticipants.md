# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 211

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
		id : 5748136126635086017,
		access_hash : 4783126613859722639,
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
				user_id : -641152084417037741,
			),
			date : 87,
			active_date : 77,
			source : 67,
			volume : 32,
			about : '9pnZk4c7tUvjJwiB',
			raise_hand_rating : -8444237014327967177,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'ILudHgf4UPsAD6cw',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 71,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Oyn07GfgmRY9IZ3d',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 6,
			),
		),
	),
	version : 80,
);
```