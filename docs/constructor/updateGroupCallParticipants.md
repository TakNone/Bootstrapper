# updateGroupCallParticipants

**Description** : *The participant list of a group call has changed*

**Layer** : 229

```tl
updateGroupCallParticipants#f2ebdb4e call:InputGroupCall participants:Vector<GroupCallParticipant> version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call whose participants changed |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | Participants whose state changed |
| <mark>version</mark> | [`int`](type/int) | Group call revision used by the update application rules » |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallParticipants(
	call : $client->inputGroupCall(
		id : 8091338783509177951,
		access_hash : 7574364190359301412,
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
				user_id : 8790051803903859134,
			),
			date : 18,
			active_date : 70,
			source : 66,
			volume : 91,
			about : 'KkZSAUuf2p4y8RJo',
			raise_hand_rating : -7332035122369130310,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'R6T9nvz8hPqSsYH1',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'O9BmUZ1Yg4zKAdMD',
						sources : array(32),
					),
				),
				audio_source : 50,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'dmOk2WRAJaMKQurN',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'lJg7fxdza3DoTbQP',
						sources : array(36),
					),
				),
				audio_source : 76,
			),
			paid_stars_total : 385756418534886394,
		),
	),
	version : 76,
);
```