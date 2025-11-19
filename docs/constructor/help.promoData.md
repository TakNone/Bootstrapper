# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 218

```tl
help.promoData#8a4d87a flags:# proxy:flags.0?true expires:int peer:flags.3?Peer psa_type:flags.1?string psa_message:flags.2?string pending_suggestions:Vector<string> dismissed_suggestions:Vector<string> custom_pending_suggestion:flags.4?PendingSuggestion chats:Vector<Chat> users:Vector<User> = help.PromoData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	expires : 90,
	peer : $client->peerUser(
		user_id : -2933508935098608992,
	),
	psa_type : 'm0IXZpH4vwgdDR9J',
	psa_message : 'Lp1vWZMwfJzg0AEt',
	pending_suggestions : array('4KHDQ695f0oCdI7j'),
	dismissed_suggestions : array('1aCiBLqxV3ecfmOj'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : 'PvzDkReigQHWxL63',
		title : $client->textWithEntities(
			text : 'GORKb8HT5lzEcaN2',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 88,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 5,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 35,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 76,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 95,
					language : 'CgwdqycYolms5VtB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 75,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : -7386364164642916067,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 100,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 13,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 27,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 77,
					document_id : 6718941076388953887,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 86,
				),
			),
		),
		description : $client->textWithEntities(
			text : 'OsvKR0CcLq5hrWgV',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 73,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 28,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 84,
					language : 'rp80wKQg7ICDWaZ9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 7,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : 1161888260938773141,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 61,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 30,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 65,
					document_id : 475372659927085400,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 41,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : -8553189649300266897,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5172392148470304599,
			title : '5sZW1FcNzLAMGQh4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 3,
			version : 16,
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
				until_date : 38,
			),
		),
		$client->chatForbidden(
			id : -8006729892059540855,
			title : 'AOSo2z30ajDHd7BI',
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
			id : -3722138617230437458,
			access_hash : 4013969591081309299,
			title : 'kmCqKpJugH1l3YoF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pVbZIcTRGt2LECFi',
					reason : 'uNzdBn8D3rTp04qk',
					text : 'B5vZp0KCH8QsfIX2',
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
				until_date : 63,
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
				until_date : 19,
			),
			participants_count : 61,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 81,
			),
			color : $client->peerColor(
				color : 55,
				background_emoji_id : 5773286576364406377,
			),
			profile_color : $client->peerColor(
				color : 48,
				background_emoji_id : 3192143751209083462,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 61,
			subscription_until_date : 0,
			bot_verification_icon : -4393940440021055127,
			send_paid_messages_stars : -6154094444709591126,
			linked_monoforum_id : -4720718265894079556,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8641762790988590704,
			access_hash : -3387965842974012299,
			title : 'WpA0TYjvXwEbrohJ',
			until_date : 63,
		),
	),
	users : array(
		$client->userEmpty(
			id : 677464155733127596,
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
			id : 6314194891216252561,
			access_hash : 5601231876516106715,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mPBxQNlGpVAr4wnX',
					reason : 'v8k6pOTaGWXSuH1A',
					text : 'VU1xFf6A8XGNlMzT',
				),
			),
			bot_inline_placeholder : 'S6Ke0GWJsMB8wDYz',
			lang_code : 'n4SMwNk3FClWJ6m1',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 6424430883032199369,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : -4366305269185548375,
			),
			bot_active_users : 54,
			bot_verification_icon : -2666358431745109808,
			send_paid_messages_stars : 8538128116280563343,
		),
	),
);
```