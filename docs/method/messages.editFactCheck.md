# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 216

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
	peer : $client->inputPeerEmpty(),
	msg_id : 84,
	text : $client->textWithEntities(
		text : 'RSXyTNKf6tePpqEG',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 60,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 94,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 46,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 40,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 55,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 59,
				language : 'P4Fxu3SKBAzZUpRW',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : -5719760912622118885,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 86,
				document_id : -8284754951567312597,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 42,
			),
		),
	),
);
```