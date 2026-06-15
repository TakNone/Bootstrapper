# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 227

```tl
help.promoData#8a4d87a flags:# proxy:flags.0?true expires:int peer:flags.3?Peer psa_type:flags.1?string psa_message:flags.2?string pending_suggestions:Vector<string> dismissed_suggestions:Vector<string> custom_pending_suggestion:flags.4?PendingSuggestion chats:Vector<Chat> users:Vector<User> = help.PromoData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **proxy** | [`flags.0?true`](type/true) | Set when connecting using an MTProxy that has configured an associated peer (that will be passed in peer, i.e. the channel that sponsored the MTProxy) that should be pinned on top of the chat list |
| <mark>expires</mark> | [`int`](type/int) | Unixtime when to re-invoke help.getPromoData |
| **peer** | [`flags.3?Peer`](type/Peer) | MTProxy/PSA peer |
| **psa_type** | [`flags.1?string`](type/string) | For Public Service Announcement peers, indicates the type of the PSA |
| **psa_message** | [`flags.2?string`](type/string) | For Public Service Announcement peers, contains the PSA itself |
| <mark>pending_suggestions</mark> | [`Vector<string>`](type/string) | Contains a list of pending suggestions » |
| <mark>dismissed_suggestions</mark> | [`Vector<string>`](type/string) | Contains a list of inverted suggestions » |
| **custom_pending_suggestion** | [`flags.4?PendingSuggestion`](type/PendingSuggestion) | Contains a list of custom pending suggestions » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chat info |
| <mark>users</mark> | [`Vector<User>`](type/User) | User info |

---

## Type

[help.PromoData](type/help.PromoData)

---

## Example

```php
$helpPromoData = $client->help->promoData(
	proxy : true,
	expires : 70,
	peer : $client->peerUser(
		user_id : 7689577170932707174,
	),
	psa_type : '8SeVkUNZD2o4JLis',
	psa_message : 'tFIzCacWV26nXL4v',
	pending_suggestions : array('qb76Y49Xmr5gOzJV'),
	dismissed_suggestions : array('2nl8LgSVdCjqu3vb'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : 'aX8cxAyMsSkgnm06',
		title : $client->textWithEntities(
			text : 'KCgxay4HBevjEFR9',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 53,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 47,
					language : 'sVYEWdAGTa6zuCry',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 31,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : -1096534804612337453,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 60,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 13,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : -3813213403939792020,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 81,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 73,
					date : 59,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 7,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 6,
					old_text : 'bpf4hK9Cx75wLBPy',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 54,
				),
			),
		),
		description : $client->textWithEntities(
			text : 'izo326agRd5TqVYK',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 44,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 74,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 98,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'bmsepDkQ6YdJX1rt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : -6506326061355209005,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 60,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 66,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 62,
					document_id : 9027717979864011035,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 80,
					date : 30,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 42,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 28,
					old_text : 'LQ6ZC29Olqxb3Avo',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 31,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : 4719351306725163792,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2658840486911088594,
			title : 'OYk1nysajNK4rhCJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 23,
			date : 62,
			version : 14,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
				manage_ranks : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				edit_rank : true,
				send_reactions : true,
				until_date : 11,
			),
		),
		$client->chatForbidden(
			id : -7891931434712151187,
			title : 'mJl6HXOp9seukQV5',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 8376353265441407632,
			access_hash : -4791090878246423088,
			title : '3TKMbOiVhW9BrRHl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'w6WojgBLEpkGrQzq',
					reason : 'aVgiBdqzoODnvjRK',
					text : 'azcLNCys4g023xWI',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
				manage_ranks : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				edit_rank : true,
				send_reactions : true,
				until_date : 50,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				edit_rank : true,
				send_reactions : true,
				until_date : 25,
			),
			participants_count : 36,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 76,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 6819110669361199417,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : -866939788464932355,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 48,
			subscription_until_date : 60,
			bot_verification_icon : -6213675122375010304,
			send_paid_messages_stars : -4892427572826889032,
			linked_monoforum_id : -6022637421457587256,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8465105643263704037,
			access_hash : 2821540979401737819,
			title : 'QW3HLiVu8SmT1sRx',
			until_date : 77,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8004763222775177437,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -8687390154920127547,
			access_hash : -6408772152795245633,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wHqfxCpV9uWGrRQi',
					reason : 'T2d3BOp5H7XURLqv',
					text : 'fhny1CZV43PEOgxi',
				),
			),
			bot_inline_placeholder : 'zcT38F0d94Dojwg6',
			lang_code : 'Rlw0TsjzPN7ZBLtV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 64,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 4187684536276342664,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 1836901488335298050,
			),
			bot_active_users : 43,
			bot_verification_icon : -3927202540320387872,
			send_paid_messages_stars : -2472965311318875533,
		),
	),
);
```