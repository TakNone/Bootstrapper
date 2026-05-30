# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 222

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **tags_enabled** | [`flags.0?true`](type/true) | Whether folder tags are enabled |
| <mark>filters</mark> | [`Vector<DialogFilter>`](type/DialogFilter) | Folders |

---

## Type

[messages.DialogFilters](type/messages.DialogFilters)

---

## Example

```php
$messagesDialogFilters = $client->messages->dialogFilters(
	tags_enabled : true,
	filters : array(
		$client->dialogFilter(
			contacts : true,
			non_contacts : true,
			groups : true,
			broadcasts : true,
			bots : true,
			exclude_muted : true,
			exclude_read : true,
			exclude_archived : true,
			title_noanimate : true,
			id : 15,
			title : $client->textWithEntities(
				text : 'hTHpy6qFMsWECZxY',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 70,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 29,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 1,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 38,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 5,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 11,
						language : 'X96HDvTny2lbNx4h',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 3,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : -847431973407343815,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 45,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 31,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 46,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 35,
						document_id : 8599677640436885435,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 34,
					),
				),
			),
			emoticon : 'NLsPBT6DxOGCdpao',
			color : 3,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 0,
			title : $client->textWithEntities(
				text : 'g0cEAs4QZTeBGyiK',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 68,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 9,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 94,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 80,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 84,
						language : 'sQ6kRvf2A75CVw3N',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 77,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : -5036874434249332147,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 69,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 97,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 13,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 68,
						document_id : 7434785576076120403,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 81,
					),
				),
			),
			emoticon : 'RGP6pe9IH83siwtx',
			color : 84,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```