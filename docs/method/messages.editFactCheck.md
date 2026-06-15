# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 227

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
	msg_id : 8,
	text : $client->textWithEntities(
		text : '4Wo5OStfC0aDE7bx',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 17,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 56,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 52,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'zDyreRvpOGnY7W31',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 6,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : -4384057740881748994,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 100,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 44,
				document_id : -6387380119178878815,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 97,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 14,
				date : 53,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 26,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 36,
				old_text : 'csgB6YOqPtjb9xWh',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 73,
			),
		),
	),
);
```