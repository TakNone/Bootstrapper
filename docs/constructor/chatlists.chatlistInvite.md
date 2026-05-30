# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link &raquo;*

**Layer** : 225

```tl
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_noanimate** | [`flags.1?true`](type/true) | If set, any animated emojis present in title should not be animated and should be instead frozen on the first frame |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Name of the link |
| **emoticon** | [`flags.0?string`](type/string) | Emoji to use as icon for the folder |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Supergroups and channels to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInvite(
	title_noanimate : true,
	title : $client->textWithEntities(
		text : 'qfT9mW0gwcoOM6pb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 54,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 79,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 69,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 96,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 59,
				language : 'ir8qApJhKuHD7OFW',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : 9165733637485467240,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 45,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : 1717038051068060855,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 70,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 33,
				date : 48,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 79,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 48,
				old_text : 'R6aOTlxyWsMnPA1I',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 83,
			),
		),
	),
	emoticon : '29fWeFp8IhqwPJC4',
	peers : array(
		$client->peerUser(
			user_id : -1858000334153367270,
		),
		$client->peerChat(
			chat_id : -1427949394338176101,
		),
		$client->peerChannel(
			channel_id : 2083245450252414276,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2624608763183882312,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2259623357808862450,
			title : '5Yh7byD2IfEMVlKo',
			photo : $client->chatPhotoEmpty(),
			participants_count : 89,
			date : 47,
			version : 98,
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
				until_date : 45,
			),
		),
		$client->chatForbidden(
			id : 2297968440218463317,
			title : 'XNfBEAu76Rc8wmZk',
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
			id : -5166681677180814003,
			access_hash : -746141097161425713,
			title : 'S8hMtuni2p5AzP0D',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iwCatjZ8VAId5x3l',
					reason : 'HuVhIgO4NS1F0rAT',
					text : 'nalWgIz4C2u67OmQ',
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
				until_date : 26,
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
				until_date : 74,
			),
			participants_count : 58,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 25,
			),
			color : $client->peerColor(
				color : 44,
				background_emoji_id : -241781959499429193,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : 8160570914191315498,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 97,
			bot_verification_icon : -4932920799431790701,
			send_paid_messages_stars : 1982553168165003635,
			linked_monoforum_id : 2301639887544428048,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6850051641127945312,
			access_hash : -126138653503032988,
			title : 'olbsnQ91NYE8xmJp',
			until_date : 96,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4072834340330849678,
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
			id : -1811496182836017804,
			access_hash : -3573742859725896624,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R2mNbTxwjE19k8JQ',
					reason : 'oNPhd2g7yJA0bzME',
					text : '4xc9raLejXQmVkHd',
				),
			),
			bot_inline_placeholder : '2OMSB8XyIAJrUwp0',
			lang_code : 'GEWwn65vImOHUFTi',
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
				max_id : 74,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : 4880418186370868505,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 1045244414494886036,
			),
			bot_active_users : 0,
			bot_verification_icon : 2173712384792614798,
			send_paid_messages_stars : -1954528009387798926,
		),
	),
);
```