# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 218

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
		id : -6488080221021791130,
		access_hash : 3671039725881622036,
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
				user_id : -4335331289207382439,
			),
			date : 85,
			active_date : 22,
			source : 42,
			volume : 87,
			about : 'fc9IiKPed0zwuTDg',
			raise_hand_rating : -7773706124897302550,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'yM5eCnVBHvtXmUFd',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'dnZI6qygGkpTv8oa',
						sources : array(41),
					),
				),
				audio_source : 41,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Oz3cC94MfiKImT2J',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'BVe9EzNhGKQblHgX',
						sources : array(68),
					),
				),
				audio_source : 92,
			),
			paid_stars_total : -9053599647359299467,
		),
	),
	version : 25,
);
```