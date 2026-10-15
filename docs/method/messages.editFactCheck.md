# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 229

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
	msg_id : 83,
	text : $client->textWithEntities(
		text : 'DghMV3eaLNiETpmC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 13,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 35,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 4,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 12,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 81,
				language : 'jSAZbmroMTXck9Kz',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 10,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 62,
				user_id : 9025991469853338744,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 71,
				document_id : -834214155248926317,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 33,
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
				date : 16,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 41,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 42,
				old_text : 'cIBXyGdLbr5EtTni',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 83,
			),
		),
	),
);
```