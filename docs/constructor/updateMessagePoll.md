# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 216

```tl
updateMessagePoll#aca1657b flags:# poll_id:long poll:flags.0?Poll results:PollResults = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll_id</mark> | [`long`](type/long) | Poll ID |
| **poll** | [`flags.0?Poll`](type/Poll) | If the server knows the client hasn't cached this poll yet, the poll itself |
| <mark>results</mark> | [`PollResults`](type/PollResults) | New poll results |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePoll(
	poll_id : -6513114572726523621,
	poll : $client->poll(
		id : 790139500816336450,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'e5xw7zSYVMHJsRkG',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(...),
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		close_period : 42,
		close_date : 38,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 21,
			),
		),
		total_voters : 56,
		recent_voters : array(
			$client->peerUser(
				user_id : -2162629138056442062,
			),
			$client->peerChat(
				chat_id : -4043881930842803742,
			),
			$client->peerChannel(
				channel_id : 501657949746843642,
			),
		),
		solution : 'ftCnDVgTPru81LdE',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 57,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 98,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : 'MfD3xrQ8pKIsbvhE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : -611968297144045816,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 83,
				document_id : 3523086694265143810,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 72,
			),
		),
	),
);
```