# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 222

```tl
account.businessChatLinks#ec43a2d1 links:Vector<BusinessChatLink> chats:Vector<Chat> users:Vector<User> = account.BusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>links</mark> | [`Vector<BusinessChatLink>`](type/BusinessChatLink) | Links |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.BusinessChatLinks](type/account.BusinessChatLinks)

---

## Example

```php
$accountBusinessChatLinks = $client->account->businessChatLinks(
	links : array(
		$client->businessChatLink(
			link : 'AdJ2jw6Z9l1BX4nv',
			message : 'WFUbcvg6pw3MGATK',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 48,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 19,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 27,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 19,
					language : 'qvNLhFbcHx051twE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 88,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : 4334656743888127688,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 37,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 55,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 77,
					document_id : 6701861838043302857,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 31,
				),
			),
			title : 'Wy28VJ09eZvGMUjX',
			views : 42,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2720141189699555217,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1566896564060204391,
			title : 'dKI48RtyEJn6Neu1',
			photo : $client->chatPhotoEmpty(),
			participants_count : 76,
			date : 83,
			version : 35,
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
				until_date : 61,
			),
		),
		$client->chatForbidden(
			id : -1580181564177551987,
			title : 'VFhftW3EY2r4J1Up',
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
			id : -6021040479654527047,
			access_hash : 5669340305829644395,
			title : 'kzVhA2rKHFwnucB7',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PWLONH5TfbqMA2mG',
					reason : 'UREznewAI0g4Kr2v',
					text : 'apoM7HcOs051Awxy',
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
				until_date : 83,
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
				until_date : 18,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 65,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : -4290707518949305235,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : 6025199822828385265,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 15,
			subscription_until_date : 88,
			bot_verification_icon : 9025190372837420358,
			send_paid_messages_stars : 8257759601940630011,
			linked_monoforum_id : 2632180156007117511,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3923395562596331549,
			access_hash : 8285514383893196082,
			title : '3Bz6bcmY4opfAJ50',
			until_date : 37,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7197616921280641116,
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
			id : -2475015601760644591,
			access_hash : 1704532764007631305,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ug6ubTphoIt5vjRC',
					reason : '4piJqblw3KcFfIMC',
					text : 'gpMx7dX4BAKc3It1',
				),
			),
			bot_inline_placeholder : 'nvZfiPDad87OJQhV',
			lang_code : '7x9lqEvJCYMNj60z',
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
				max_id : 40,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 3071654408261175657,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 9033975610776527642,
			),
			bot_active_users : 2,
			bot_verification_icon : -2433235165183977947,
			send_paid_messages_stars : 6305446402877571789,
		),
	),
);
```