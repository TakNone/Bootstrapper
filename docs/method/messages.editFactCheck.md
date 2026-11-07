# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 233

```tl
messages.editFactCheck#589ee75 peer:InputPeer msg_id:int text:TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Fact-check (maximum UTF-8 length specified in appConfig.factcheck_length_limit) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ACTION_FORBIDDEN** | `403` | You cannot execute this action |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editFactCheck(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 25,
	text : $client->textWithEntities(
		text : '1Fg5JMzhry3HfvsT',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 45,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 80,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'r0Z7ybnAp8XFO4LI',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 677955184785538453,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : -3250222784763445207,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 50,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 50,
				date : 37,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 7,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 12,
				old_text : 'OHJQNZx7snUKpC4F',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 4,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 22,
			),
		),
	),
);
```