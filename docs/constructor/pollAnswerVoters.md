# pollAnswerVoters

**Description** : *A poll answer, and how users voted on it*

**Layer** : 227

```tl
pollAnswerVoters#3645230a flags:# chosen:flags.0?true correct:flags.1?true option:bytes voters:flags.2?int recent_voters:flags.2?Vector<Peer> = PollAnswerVoters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **chosen** | [`flags.0?true`](type/true) | Whether we have chosen this answer |
| **correct** | [`flags.1?true`](type/true) | For quizzes, whether the option we have chosen is correct |
| <mark>option</mark> | [`bytes`](type/bytes) | The param that has to be passed to messages.sendVote |
| **voters** | [`flags.2?int`](type/int) | How many users voted for this option |
| **recent_voters** | [`flags.2?Vector<Peer>`](type/Peer) | NOTHING |

---

## Type

[PollAnswerVoters](type/PollAnswerVoters)

---

## Example

```php
$pollAnswerVoters = $client->pollAnswerVoters(
	chosen : true,
	correct : true,
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	voters : 84,
	recent_voters : array(
		$client->peerUser(
			user_id : -7563859627642701665,
		),
		$client->peerChat(
			chat_id : 8914935003395411688,
		),
		$client->peerChannel(
			channel_id : 1985490296280574144,
		),
	),
);
```