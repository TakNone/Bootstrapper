# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 218

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
			id : 91,
			title : $client->textWithEntities(
				text : '4gLdx2Mw8r0yfXbW',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 54,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 52,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 81,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 53,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 62,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 98,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 94,
						language : '2v4hUOB0mwEiHqyM',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 2,
						user_id : 8696273906069500160,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 75,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 20,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 67,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 56,
						document_id : -7912824952650165380,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 26,
					),
				),
			),
			emoticon : 'U7l4YQ3rpJAgqdBV',
			color : 38,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 98,
			title : $client->textWithEntities(
				text : '48Ch3MRujia6YLAs',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 56,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 92,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 6,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 96,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 33,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 31,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 95,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 39,
						language : 'WXoVT3fDm0wMr2cl',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 96,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : 1246034150915789102,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 48,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 42,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 62,
						document_id : 8084055349178701795,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 73,
					),
				),
			),
			emoticon : 'gDLu4P7QUsRa1rIN',
			color : 48,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```