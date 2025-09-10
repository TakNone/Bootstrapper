# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 214

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
			link : 'aCHet3sQUSzdPku6',
			message : 'e0IiluAGJjanrdLK',
			entities : array(
				$client->messageEntityUnknown(
					offset : 79,
					length : 94,
				),
				$client->messageEntityMention(
					offset : 20,
					length : 22,
				),
				$client->messageEntityHashtag(
					offset : 69,
					length : 18,
				),
				$client->messageEntityBotCommand(
					offset : 49,
					length : 33,
				),
				$client->messageEntityUrl(
					offset : 59,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 92,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 35,
					length : 87,
				),
				$client->messageEntityItalic(
					offset : 94,
					length : 67,
				),
				$client->messageEntityCode(
					offset : 92,
					length : 72,
				),
				$client->messageEntityPre(
					offset : 21,
					length : 24,
					language : 'NAb3zIdeXnsBP6Jo',
				),
				$client->messageEntityTextUrl(
					offset : 39,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 58,
					length : 38,
					user_id : 5193981525722708041,
				),
				$client->inputMessageEntityMentionName(
					offset : 24,
					length : 18,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 43,
					length : 74,
				),
				$client->messageEntityCashtag(
					offset : 58,
					length : 45,
				),
				$client->messageEntityUnderline(
					offset : 68,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 57,
					length : 23,
				),
				$client->messageEntityBankCard(
					offset : 18,
					length : 97,
				),
				$client->messageEntitySpoiler(
					offset : 76,
					length : 17,
				),
				$client->messageEntityCustomEmoji(
					offset : 100,
					length : 2,
					document_id : 7391509108718162827,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 75,
					length : 1,
				),
			),
			title : 'lZtW5VLcpzKTxGa8',
			views : 32,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7887347659356073053,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1977420170563437619,
			title : 'Y2Slh7EcBrd8yi4w',
			photo : $client->chatPhotoEmpty(),
			participants_count : 69,
			date : 94,
			version : 31,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : 9019784543841090248,
			title : '6AQxmyXKN9HoLpWM',
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
			id : 4880459151133471409,
			access_hash : 7427321412663441530,
			title : 'c1CbIU3YHN9RvQLX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oqXawBmUIQLEd2vz',
					reason : 'OtH5JgIf1eLnSv46',
					text : 'wjKfIh4NTH2m5Mn9',
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
				until_date : 20,
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
				until_date : 76,
			),
			participants_count : 75,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 40,
			color : $client->peerColor(
				color : 16,
				background_emoji_id : -7498745386981289313,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : 7437143373558904645,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 32,
			bot_verification_icon : 173713296695261335,
			send_paid_messages_stars : -4014478039126634317,
			linked_monoforum_id : -5214782815679350031,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 803370109863476325,
			access_hash : 7270863577556893943,
			title : 'W7teFwOaoSyu63B0',
			until_date : 69,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2396135147342471634,
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
			id : 5810331917736251740,
			access_hash : 8931806379890105509,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'y1wCzPxKVd6Oopg2',
					reason : 'qX46ifjDgSBx18Vy',
					text : 'shZ4k5U1x0nKfNTz',
				),
			),
			bot_inline_placeholder : 'O6Is2ilwqX7cuZ0H',
			lang_code : '0umjDSxd9pLXK5Iy',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 34,
			color : $client->peerColor(
				color : 53,
				background_emoji_id : 8201929418617613095,
			),
			profile_color : $client->peerColor(
				color : 48,
				background_emoji_id : 8426236852093872518,
			),
			bot_active_users : 83,
			bot_verification_icon : 3427084372294983761,
			send_paid_messages_stars : -723726360141124523,
		),
	),
);
```