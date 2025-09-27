# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link &raquo;*

**Layer** : 214

```tl
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_noanimate** | [`flags.1?true`](type/true) | NOTHING |
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
		text : 'fVpy8qUAKRi7v1bO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 76,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 87,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 5,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 24,
				language : '9nFuwb5zNgkSPQ84',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 78,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : -6782823360927336359,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 91,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 50,
				document_id : 5995390617377063480,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 71,
			),
		),
	),
	emoticon : 'thVgaEkWfP35Z0qU',
	peers : array(
		$client->peerUser(
			user_id : 3637788610683820420,
		),
		$client->peerChat(
			chat_id : -2400820068354243367,
		),
		$client->peerChannel(
			channel_id : -2061158490823990256,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1070540051735632826,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8080033019625808326,
			title : 'tZGzP4erj8EL7DhV',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 52,
			version : 87,
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
				until_date : 48,
			),
		),
		$client->chatForbidden(
			id : -1308935724466056739,
			title : 'wqVkfEPUhigXG729',
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
			id : 4985388149508862308,
			access_hash : -1523928315932389577,
			title : 'CbkTBae6inz1wStm',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VUDPjEH7AzZyBvro',
					reason : 'Zs3WopVnuB5JCOhr',
					text : 'TarSZ816I07wimOo',
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
				until_date : 24,
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
				until_date : 85,
			),
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 26,
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 3415544904193636137,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -8197377939862969616,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 38,
			subscription_until_date : 14,
			bot_verification_icon : 4443143359356592125,
			send_paid_messages_stars : 2825108584524649995,
			linked_monoforum_id : -1366150879413973823,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5549139279845636823,
			access_hash : -5718656689007188482,
			title : 'Ug2oPyZQfxFVbaCe',
			until_date : 43,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2976279731674578439,
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
			id : -1489232792185558532,
			access_hash : 5695793597183959313,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RCk40Xl76HInepPL',
					reason : 'wEJdb2BsQNzeA7Z1',
					text : '0Qc3UxObWN17u4Ys',
				),
			),
			bot_inline_placeholder : 'vpHl1KF8qkIQPEJD',
			lang_code : 'HL4JYz1ANhtTwUdk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 60,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -7706418161217667474,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 8788887009190265832,
			),
			bot_active_users : 91,
			bot_verification_icon : -7689927707492707811,
			send_paid_messages_stars : -8856411800097416169,
		),
	),
);
```