# help.promoData

**Description** : *A set of useful suggestions and a PSA/MTProxy sponsored peer, see here &raquo; for more info*

**Layer** : 225

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
	expires : 32,
	peer : $client->peerUser(
		user_id : 4736697891991226705,
	),
	psa_type : 'aY2ivR5b3uSzQlXN',
	psa_message : '8JqfEyriaxwdN2F5',
	pending_suggestions : array('yti9oYkMe62WhzXp'),
	dismissed_suggestions : array('5Zz7IFK8o6jxlP90'),
	custom_pending_suggestion : $client->pendingSuggestion(
		suggestion : '9Tg7lsGW5DL2Mh1Q',
		title : $client->textWithEntities(
			text : 'eal3V8PngIEZ59SX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 73,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 94,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 50,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 25,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 40,
					language : 'UuSjgc1X6mVCoFqb',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : -8266157072970337860,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 83,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : -2110956314097174608,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 97,
					date : 68,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 59,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 25,
					old_text : 'f916W5NrYRbOGgXe',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 92,
				),
			),
		),
		description : $client->textWithEntities(
			text : 'G3WEVrzDJb2ZhYn9',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 85,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 14,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 27,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 37,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 86,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : 'hxUEqzg32F0pkDbZ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : 8096013778434263808,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 15,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 81,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 27,
					document_id : 6823870220017385531,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 89,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 87,
					date : 66,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 31,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 67,
					old_text : 'WUqFfLECxlAnMTDQ',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 0,
				),
			),
		),
		url : 'https://docs.liveproto.dev',
	),
	chats : array(
		$client->chatEmpty(
			id : -8193120784191126582,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9059417824363242213,
			title : 'iOvcWPE07yxuB6GZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 22,
			date : 91,
			version : 83,
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
				until_date : 24,
			),
		),
		$client->chatForbidden(
			id : 410977299924601271,
			title : 'rYSjls3nzVRxmPOJ',
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
			id : -1473555792380640160,
			access_hash : 6862062723566790330,
			title : 'sgl5Wh1RFLmQ4JrM',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'JlRTC6tKcZf0Hmh8',
					reason : 'GD9oFmxN5c1pPYME',
					text : 'ijXfFhE76GxeJTDI',
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
				until_date : 15,
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
				until_date : 19,
			),
			participants_count : 76,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 31,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : 2550144885137484172,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -4179894115740069690,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 79,
			subscription_until_date : 17,
			bot_verification_icon : -1328101924246643599,
			send_paid_messages_stars : -6816004429573182066,
			linked_monoforum_id : -4269251556570183717,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -4962232236406502876,
			access_hash : 6595555817248866073,
			title : 'xMCUHbAfD0zrvlWB',
			until_date : 79,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3305459301685298110,
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
			id : 3506726250355679993,
			access_hash : 4915005046967223995,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2erAcGwRDp3C0T5E',
					reason : 'c8W1dL4K5u6IxFbR',
					text : 'AzObeqoHWNRpfmay',
				),
			),
			bot_inline_placeholder : 'GIaRdLV92D5vmket',
			lang_code : 'vJjhdyVo36a1Bnx7',
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
				max_id : 96,
			),
			color : $client->peerColor(
				color : 49,
				background_emoji_id : 8203953892283392209,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : 5222296382053149827,
			),
			bot_active_users : 96,
			bot_verification_icon : 193368749538077952,
			send_paid_messages_stars : -1118899992085832465,
		),
	),
);
```