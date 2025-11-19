# contacts.sponsoredPeers

**Description** : *Sponsored peers*

**Layer** : 218

```tl
contacts.sponsoredPeers#eb032884 peers:Vector<SponsoredPeer> chats:Vector<Chat> users:Vector<User> = contacts.SponsoredPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SponsoredPeer>`](type/SponsoredPeer) | Sponsored peers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Info about sponsored chats and channels |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about sponsored users |

---

## Type

[contacts.SponsoredPeers](type/contacts.SponsoredPeers)

---

## Example

```php
$contactsSponsoredPeers = $client->contacts->sponsoredPeers(
	peers : array(
		$client->sponsoredPeer(
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			peer : $client->peerUser(
				user_id : -1397539908498907698,
			),
			sponsor_info : 'LebfH5M6UsRxDKtT',
			additional_info : 'jKZWPfDG1qI3O8v7',
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7659481762054992510,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7665359680599159787,
			title : 'gkDyfNEbS8srH9mG',
			photo : $client->chatPhotoEmpty(),
			participants_count : 73,
			date : 44,
			version : 82,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 73,
			),
		),
		$client->chatForbidden(
			id : 8406057783917091575,
			title : 'i5PDTb3V4jEvSA6X',
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
			id : -3059520167272695059,
			access_hash : 7412778192222559202,
			title : 'cgsXm4UHPDokrQeZ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KMqY3Pwbtz5sL8j7',
					reason : 'odmX71MeKDC96tJV',
					text : 'ruvHlnYdJ24KwcqV',
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
				until_date : 46,
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
				until_date : 9,
			),
			participants_count : 74,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 88,
			),
			color : $client->peerColor(
				color : 76,
				background_emoji_id : -5529576296427229120,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : 8030920047912886538,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 71,
			bot_verification_icon : 6174270251688271303,
			send_paid_messages_stars : 1431412968822358507,
			linked_monoforum_id : -5010578816440755416,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2906750875120959824,
			access_hash : 9201101987571966998,
			title : 'O7DRVkTbehxB8Hzu',
			until_date : 84,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6025388987574241109,
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
			id : -3648866597742771853,
			access_hash : 2540237774889000958,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Aa0mEnkQHsD1JzxU',
					reason : 'xhYqd2K0SRC1MZWT',
					text : 'GhX1U98MekfuB0aO',
				),
			),
			bot_inline_placeholder : 'z9phaoFyPRJb3gI2',
			lang_code : 'dCO4W87LTVZewcXg',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 6826038914534373250,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : -6432549699376842051,
			),
			bot_active_users : 19,
			bot_verification_icon : -4155258216628456469,
			send_paid_messages_stars : -5596487538860515252,
		),
	),
);
```