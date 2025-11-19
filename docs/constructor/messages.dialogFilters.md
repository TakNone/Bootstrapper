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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : 65,
			title : $client->textWithEntities(
				text : 'bS9MENBJk2nd0sKT',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 4,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 86,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 49,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 53,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 100,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 12,
						language : 'IfX7RULVNcu82Dmr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : -1680775703720135708,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 3,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 72,
						document_id : -6153211955687384395,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
			),
			emoticon : 'm9o75EyGiLlWZ38e',
			color : 64,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 19,
			title : $client->textWithEntities(
				text : 'e3tzXDpdbn6RFgwc',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 19,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 11,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 12,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 67,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 34,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 1,
						language : 'bUPV8OuLWl2jyvJT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 41,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 42,
						user_id : -2396279510863122768,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 49,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 97,
						document_id : 3685243354626148520,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 7,
					),
				),
			),
			emoticon : '3ha6FLoekPvznCHU',
			color : 29,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```