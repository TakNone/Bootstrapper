# updateGroupCallParticipants

**Description** : *The participant list of a group call has changed*

**Layer** : 233

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
		id : 4482009000294702694,
		access_hash : 1554258479493157105,
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
				user_id : 2263793429746321102,
			),
			date : 89,
			active_date : 9,
			source : 81,
			volume : 61,
			about : 'mlnE0ROPVpogyLju',
			raise_hand_rating : 655712062975862100,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'dLczrGeNB3vKpZMi',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : '7gDY2Ale1GLIXiZq',
						sources : array(48),
					),
				),
				audio_source : 29,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'X7jMUedCHSTBnWcR',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'AZBDbcg1y7NpkWo0',
						sources : array(43),
					),
				),
				audio_source : 81,
			),
			paid_stars_total : 7089594708170966134,
		),
	),
	version : 60,
);
```