# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 222

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
	msg_id : 31,
	text : $client->textWithEntities(
		text : 'w4ZKBjRh1Y8JXVCA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 27,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 8,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 96,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 31,
				language : 'QB1XgbcawiquO39m',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 64,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : 1329231960863932350,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : 4752847296008642968,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 73,
			),
		),
	),
);
```