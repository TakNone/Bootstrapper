# updates.channelDifference

**Description** : *The new updates*

**Layer** : 214

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 61,
	timeout : 59,
	new_messages : array(
		$client->messageEmpty(
			id : 76,
			peer_id : $client->peerUser(
				user_id : -2600360050418356351,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 69,
			from_id : $client->peerUser(
				user_id : -8223791993020540381,
			),
			from_boosts_applied : 7,
			peer_id : $client->peerUser(
				user_id : 6652149265369822198,
			),
			saved_peer_id : $client->peerUser(
				user_id : -4636458710537608681,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'S4adsNgWtuCGA0wH',
				date : 65,
				channel_post : 59,
				post_author : 'YUlpLaBVQ8MfXbF3',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 56,
				saved_from_id : $client->peerUser(...),
				saved_from_name : '3ytBsTr0ezK14Umf',
				saved_date : 85,
				psa_type : 'nTikUF5KlczP0m4h',
			),
			via_bot_id : -435900733746910467,
			via_business_bot_id : 8077932486320898344,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 99,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 93,
				quote_text : 'r3MLEq1thAPp8RVv',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 34,
				todo_item_id : 4,
			),
			date : 6,
			message : 'IjeuiSbBUvmtFxhn',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 3,
					length : 33,
				),
				$client->messageEntityMention(
					offset : 64,
					length : 20,
				),
				$client->messageEntityHashtag(
					offset : 39,
					length : 53,
				),
				$client->messageEntityBotCommand(
					offset : 31,
					length : 19,
				),
				$client->messageEntityUrl(
					offset : 81,
					length : 13,
				),
				$client->messageEntityEmail(
					offset : 38,
					length : 54,
				),
				$client->messageEntityBold(
					offset : 73,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 20,
					length : 42,
				),
				$client->messageEntityCode(
					offset : 2,
					length : 78,
				),
				$client->messageEntityPre(
					offset : 67,
					length : 35,
					language : 'aMLxOuBZKJ90iApq',
				),
				$client->messageEntityTextUrl(
					offset : 68,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 89,
					length : 1,
					user_id : -4171545032007154415,
				),
				$client->inputMessageEntityMentionName(
					offset : 3,
					length : 50,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 90,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 53,
					length : 37,
				),
				$client->messageEntityUnderline(
					offset : 59,
					length : 90,
				),
				$client->messageEntityStrike(
					offset : 54,
					length : 93,
				),
				$client->messageEntityBankCard(
					offset : 13,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 35,
					length : 60,
				),
				$client->messageEntityCustomEmoji(
					offset : 24,
					length : 13,
					document_id : 4806622468263505655,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 1,
					length : 49,
				),
			),
			views : 12,
			forwards : 81,
			replies : $client->messageReplies(
				comments : true,
				replies : 73,
				replies_pts : 13,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 1595228604545671057,
				max_id : 60,
				read_max_id : 91,
			),
			edit_date : 10,
			post_author : 'YOuD4raRNntMfc3j',
			grouped_id : 7536957533813220705,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fSWvAFTs9ahR8k0o',
					reason : '9XAQZ0fWekI7lVbD',
					text : 'XIe1mhWB3FCDg4pJ',
				),
			),
			ttl_period : 13,
			quick_reply_shortcut_id : 85,
			effect : -5871247076857193231,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'sd7KT0HRfDSOtBA8',
				text : $client->textWithEntities(...),
				hash : 4895397600379745202,
			),
			report_delivery_until_date : 18,
			paid_message_stars : -2595140662974261113,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 20,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 94,
			from_id : $client->peerUser(
				user_id : -2926327318227930265,
			),
			peer_id : $client->peerUser(
				user_id : -2141862323544417481,
			),
			saved_peer_id : $client->peerUser(
				user_id : -858839929036325599,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 18,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 31,
				quote_text : 'NVthFBO3L9ZMcIgi',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 93,
				todo_item_id : 36,
			),
			date : 10,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 85,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
			pts : 77,
			pts_count : 60,
		),
		$client->updateMessageID(
			id : 78,
			random_id : -7327998388653854249,
		),
		$client->updateDeleteMessages(
			messages : array(62),
			pts : 41,
			pts_count : 13,
		),
		$client->updateUserTyping(
			user_id : -1439801484866332389,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -7821863675419585366,
			from_id : $client->peerUser(
				user_id : -8996170141489690866,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -3576571504373599334,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -7235088291046215634,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1785199912097059159,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 707973297385323485,
			date : 52,
			device : '4LsiAakwZWdvje90',
			location : 'SAMXfpBxD3Rlv46H',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -4316310019557930766,
				chat_id : 35,
				date : 68,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 93,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 92,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 69,
			),
			date : 58,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 43,
			max_date : 65,
			date : 21,
		),
		$client->updateChatParticipantAdd(
			chat_id : 981915458008417056,
			user_id : -2209329873620329646,
			inviter_id : 5070987159878783564,
			date : 58,
			version : 96,
		),
		$client->updateChatParticipantDelete(
			chat_id : -1425812409039790528,
			user_id : -3602812320574783074,
			version : 76,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 50,
					ip_address : '127.0.0.1',
					port : 34,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 58,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 62,
			type : 'cn1PDMLbY2soJKg3',
			message : '60OwFZHC4BzvyWI5',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 94,
					length : 90,
				),
				$client->messageEntityMention(
					offset : 71,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 96,
					length : 29,
				),
				$client->messageEntityBotCommand(
					offset : 70,
					length : 91,
				),
				$client->messageEntityUrl(
					offset : 80,
					length : 63,
				),
				$client->messageEntityEmail(
					offset : 49,
					length : 18,
				),
				$client->messageEntityBold(
					offset : 85,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 12,
					length : 27,
				),
				$client->messageEntityCode(
					offset : 78,
					length : 41,
				),
				$client->messageEntityPre(
					offset : 36,
					length : 74,
					language : 'kaxJwI4p7XMmRqi1',
				),
				$client->messageEntityTextUrl(
					offset : 30,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 76,
					length : 35,
					user_id : -1890824117408491408,
				),
				$client->inputMessageEntityMentionName(
					offset : 14,
					length : 93,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 66,
					length : 13,
				),
				$client->messageEntityCashtag(
					offset : 96,
					length : 15,
				),
				$client->messageEntityUnderline(
					offset : 24,
					length : 54,
				),
				$client->messageEntityStrike(
					offset : 55,
					length : 62,
				),
				$client->messageEntityBankCard(
					offset : 5,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 37,
					length : 64,
				),
				$client->messageEntityCustomEmoji(
					offset : 7,
					length : 18,
					document_id : -7899068129293903200,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 69,
					length : 2,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7359356143509898543),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(3772596334285541315),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(2762109072172417459),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(2306965591080306053),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -1097383781789510024,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 6,
			peer : $client->peerUser(
				user_id : 3091570722065007163,
			),
			max_id : 32,
			still_unread_count : 10,
			pts : 40,
			pts_count : 44,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -5351100361305344393,
			),
			max_id : 16,
			pts : 19,
			pts_count : 39,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7129075717052262145,
				url : 'https://docs.liveproto.dev',
			),
			pts : 18,
			pts_count : 67,
		),
		$client->updateReadMessagesContents(
			messages : array(93),
			pts : 44,
			pts_count : 16,
			date : 29,
		),
		$client->updateChannelTooLong(
			channel_id : -1214168313783168003,
			pts : 54,
		),
		$client->updateChannel(
			channel_id : -4106543467512390961,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(...),
			),
			pts : 8,
			pts_count : 68,
		),
		$client->updateReadChannelInbox(
			folder_id : 6,
			channel_id : 4873696776512761540,
			max_id : 15,
			still_unread_count : 51,
			pts : 86,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -4649464109022258100,
			messages : array(47),
			pts : 40,
			pts_count : 48,
		),
		$client->updateChannelMessageViews(
			channel_id : -5509266270635419759,
			id : 50,
			views : 20,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4958759120082608352,
			user_id : 3826317167844506607,
			is_admin : false,
			version : 57,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(5551386551221770219),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -1650211618227769401,
			user_id : -1727484286069879021,
			query : 'IX8S3JDLKfqoPpsE',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'Bh6SirxpLayVjCvN',
		),
		$client->updateBotInlineSend(
			user_id : 6040123956499981390,
			query : 'TuocMne7FIRSpgXA',
			geo : $client->geoPointEmpty(),
			id : 'gesilHV7B6WJmaqn',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 89,
				id : 987345370519735326,
				access_hash : 5061546917828214417,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(...),
			),
			pts : 62,
			pts_count : 35,
		),
		$client->updateBotCallbackQuery(
			query_id : -5113308507654666328,
			user_id : -3154841590201142064,
			peer : $client->peerUser(
				user_id : 7532705214868788755,
			),
			msg_id : 82,
			chat_instance : 2371186464804834020,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'yvV0MxWFQSJkPTbL',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 28,
				peer_id : $client->peerUser(...),
			),
			pts : 87,
			pts_count : 62,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -1889650692686789064,
			user_id : 8563620725621676783,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 3,
				id : 8794348633328791603,
				access_hash : -450689414184648291,
			),
			chat_instance : -3393650745133678323,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '7mAtrUWwP9qgSCaI',
		),
		$client->updateReadChannelOutbox(
			channel_id : -1898670209103535223,
			max_id : 26,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -5204668290145143915,
			),
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : -7589651333183467987,
			),
			draft : $client->draftMessageEmpty(
				date : 46,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8116390151298614181,
			webpage : $client->webPageEmpty(
				id : -6849656274449112659,
				url : 'https://docs.liveproto.dev',
			),
			pts : 31,
			pts_count : 21,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 96,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 71,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 71,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '5RUI7KFfBpcxvOgL',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -4747091499480360149,
			data : $client->dataJSON(
				data : 'ZYDvsy1Ux3ojdkrM',
			),
			timeout : 98,
		),
		$client->updateBotShippingQuery(
			query_id : 7232850783778393035,
			user_id : -3234284372698449733,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 's0G9MEL2AIeQcKWD',
				street_line2 : 'N6qkZ5InR2MJeE1V',
				city : 'ASg7citUI09NwG1l',
				state : 'CzpKf2YZDqSMVw5L',
				country_iso2 : '4Co3f0l2pHqRPvt1',
				post_code : 'SZUKNo2e436R5BXO',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -3377817708740853172,
			user_id : 9143400635500046431,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'XA4sSbGYKn5dUT8W',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'Q7OJL2oxC4ctBiu3',
			currency : '3qJaTYQ14sugchrG',
			total_amount : -4539768704890538876,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 4139718748755526271,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'n4yNpokZQ0Xr9UeG',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '0wGRbLnexQ3oJNky',
				from_version : 37,
				version : 79,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -5180130665962877682,
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : 6787911631988545627,
			),
			messages : array(37),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -7500728585657212791,
			available_min_id : 97,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4701360757432453917,
			),
		),
		$client->updateMessagePoll(
			poll_id : -3124531389379743787,
			poll : $client->poll(
				id : 3332062601794026568,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 10,
				close_date : 85,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 42,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'CDFRlBZj1EMO7tYe',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 3655270677384559501,
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
				until_date : 43,
			),
			version : 5,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 99,
				),
			),
			pts : 44,
			pts_count : 2,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 7950240394920064992,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 59,
				request_chat_title : 'zekxOStRWCa910bp',
				request_chat_date : 11,
				business_bot_id : 9158152481790608799,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 1949880395952914473,
				registration_month : 'JTFjmOtdEuoS48he',
				phone_country : '+1234567890',
				name_change_date : 81,
				photo_change_date : 41,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 64,
					distance : 47,
				),
				$client->peerSelfLocated(
					expires : 87,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 3369579966755402068,
			),
			messages : array(2),
			sent_messages : array(35),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -5857961522270271289,
				access_hash : 6765482906454502941,
				slug : 'H9Eepof83QPDKzYk',
				title : 'Ks0n5ohJxA7F61kH',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'DOrF3Mf746LXGTRe',
				installs_count : 4,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 356595901465746966,
			),
			msg_id : 19,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -825784547342917238,
			peer : $client->peerUser(
				user_id : -2830321069478200695,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 26,
		),
		$client->updateDialogFilter(
			id : 30,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 27,
				title : $client->textWithEntities(...),
				emoticon : 's3ifm51qcTEaJ2Ir',
				color : 17,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(84),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -1959700008873707284,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 8763885844419182521,
			id : 94,
			forwards : 26,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 8668883392993693065,
			top_msg_id : 44,
			read_max_id : 45,
			broadcast_id : 3617672583223946565,
			broadcast_post : 77,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4250043423574949301,
			top_msg_id : 68,
			read_max_id : 93,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -608535472147043435,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 1906129442812215140,
			top_msg_id : 65,
			from_id : $client->peerUser(
				user_id : -4083918357771137024,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6860229349625743319,
			),
			messages : array(58),
			pts : 66,
			pts_count : 86,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -3915998579829431502,
			messages : array(86),
			pts : 76,
			pts_count : 85,
		),
		$client->updateChat(
			chat_id : 7020009836973357538,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -8175168261136959729,
				access_hash : 4891747136212901676,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 51,
					active_date : 7,
					source : 32,
					volume : 26,
					about : 'fY6e8bGlzkta3iCh',
					raise_hand_rating : 752537904168620164,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 29,
		),
		$client->updateGroupCall(
			chat_id : 525844197722087080,
			call : $client->groupCallDiscarded(
				id : 6604882004365300978,
				access_hash : -54326430009206530,
				duration : 27,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 2288343749703551756,
			),
			ttl_period : 34,
		),
		$client->updateChatParticipant(
			chat_id : 6532695791591327531,
			date : 91,
			actor_id : -3592103166629887177,
			user_id : 6186141382079290414,
			prev_participant : $client->chatParticipant(
				user_id : 2097110770890042428,
				inviter_id : 7995078290017359970,
				date : 24,
			),
			new_participant : $client->chatParticipant(
				user_id : 7636977348716446239,
				inviter_id : 612490157953333586,
				date : 44,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'o2QWdqBYMfwIJXui',
				admin_id : 4198759549043403396,
				date : 46,
				start_date : 11,
				expire_date : 89,
				usage_limit : 0,
				usage : 63,
				requested : 79,
				subscription_expired : 19,
				title : 'yPbVpCmGHczr2S17',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 70,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 2736011300434526308,
			date : 49,
			actor_id : -885665221972391922,
			user_id : 2038538919539896392,
			prev_participant : $client->channelParticipant(
				user_id : 7213562178817959373,
				date : 88,
				subscription_until_date : 68,
			),
			new_participant : $client->channelParticipant(
				user_id : 4456755227591429617,
				date : 67,
				subscription_until_date : 85,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'k2PL0vuHOIcJeVoG',
				admin_id : -7066324278855447264,
				date : 60,
				start_date : 22,
				expire_date : 92,
				usage_limit : 30,
				usage : 50,
				requested : 63,
				subscription_expired : 29,
				title : 'ZXbH054aGWCuqgkp',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 23,
		),
		$client->updateBotStopped(
			user_id : 1304798576249711690,
			date : 88,
			stopped : true,
			qts : 9,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'CDT13msbZWKe76cE',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7182365306230668228,
			),
			bot_id : -8097849862811894993,
			commands : array(
				$client->botCommand(
					command : 'wN1tiUCYL02ZuWQA',
					description : 'eFbkDgLn3Iv71fqA',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 6898739797287767258,
			),
			requests_pending : 40,
			recent_requesters : array(-7675775880915298201),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 1231030106394135495,
			),
			date : 19,
			user_id : 1133790012858711247,
			about : 'l24E8sk1iYpIVatr',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'ugVYva1Lzjs0TZMi',
				admin_id : -6332516815078782420,
				date : 37,
				start_date : 33,
				expire_date : 52,
				usage_limit : 69,
				usage : 27,
				requested : 17,
				subscription_expired : 7,
				title : 'yhrRu71DHlBEjmve',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 91,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 2676753602927914582,
			),
			msg_id : 58,
			top_msg_id : 50,
			saved_peer_id : $client->peerUser(
				user_id : -5030043847384546903,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 4618086398854740344,
		),
		$client->updateBotMenuButton(
			bot_id : 8155676506179171191,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 3301670418461892207,
			),
			msg_id : 75,
			transcription_id : -8486090451205944505,
			text : 'Hjd0gAUxzaM9uX5e',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4720089324809314146,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 1557739473846264136,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -2544261180625709141,
			),
			msg_id : 67,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 28,
					h : 15,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 55,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -4051639529391907366,
			topic_id : 47,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -1646723157880492954,
			order : array(53),
		),
		$client->updateUser(
			user_id : -8142449326051507427,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -447021975694643438,
			),
			story : $client->storyItemDeleted(
				id : 23,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -5502176254984938286,
			),
			max_id : 67,
		),
		$client->updateStoryID(
			id : 0,
			random_id : -63833199379933417,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 67,
				cooldown_until_date : 33,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -560059378865230802,
			),
			story_id : 95,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -8736174602307763198,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'VjtA6GzuywgHf9mS',
				user_id : -8316042872699777018,
				giveaway_msg_id : 66,
				date : 92,
				expires : 81,
				used_gift_slug : 'YlG1Mr9dTLzewn52',
				multiplier : 67,
				stars : -2020406757359740356,
			),
			qts : 99,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -6564511328498238883,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 6391843880854935988,
			),
			wallpaper : $client->wallPaper(
				id : -3171710385999681761,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -8313797217116745512,
				slug : 'N7lasz8Lqviu2Yw6',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -7777064893191449623,
			),
			msg_id : 21,
			date : 54,
			actor : $client->peerUser(
				user_id : 1780840674749897566,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'MiEuYCFk0BV9ncbr',
				),
				$client->reactionCustomEmoji(
					document_id : -4398884740330697669,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '1WRlV2jwvF68TJEs',
				),
				$client->reactionCustomEmoji(
					document_id : -2736968647173688349,
				),
				$client->reactionPaid(),
			),
			qts : 17,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -7362521100166486647,
			),
			msg_id : 58,
			date : 64,
			reactions : array(
				$client->reactionCount(
					chosen_order : 92,
					reaction : $client->reactionEmpty(...),
					count : 27,
				),
			),
			qts : 89,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 35,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'oMhPL39ekSI5jCgO',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 69,
					shortcut : 'Xf8mRwTzlqV6Yx0I',
					top_message : 40,
					count : 17,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 59,
				shortcut : 'B1oRYaT5WHiZbwGN',
				top_message : 73,
				count : 40,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 67,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 28,
			messages : array(9),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'xrtlmuPOGQiZTjsK',
				user_id : 9208111253628298021,
				dc_id : 99,
				date : 82,
				rights : $client->businessBotRights(...),
			),
			qts : 12,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'C2iZVfyvLX9Qn5JK',
			message : $client->messageEmpty(
				id : 16,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
			qts : 8,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'ZHtYAbVf3JNkOyqW',
			message : $client->messageEmpty(
				id : 65,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(...),
			),
			qts : 35,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'A1wqpdesN2l0uinU',
			peer : $client->peerUser(
				user_id : 6135902154098558953,
			),
			messages : array(17),
			qts : 85,
		),
		$client->updateNewStoryReaction(
			story_id : 82,
			peer : $client->peerUser(
				user_id : 4800786603347557945,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3409705857544978582,
				nanos : 66,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 8139003588111500134,
			user_id : -1520617429780626589,
			connection_id : 'Gh3rwSZnJm4VYTDM',
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 4734425509870956974,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 350596625768474935,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 84,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -3296409233760742325,
			payload : '594SNHyAneIfz7JT',
			qts : 27,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 96,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 2807486821351943966,
				access_hash : -7011681186806889369,
			),
			sub_chain_id : 42,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 92,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 661308364435359311,
			saved_peer_id : $client->peerUser(
				user_id : 5598992741239063010,
			),
			read_max_id : 55,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 3405202488656488817,
			saved_peer_id : $client->peerUser(
				user_id : 2971981164677256388,
			),
			read_max_id : 97,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -2417670260874970519,
			saved_peer_id : $client->peerUser(
				user_id : 5204186486931364968,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 8649927391881578708,
			text : 'IV19owh740AtqHSe',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -492463972641736538,
			payload : '8HGX3mMS1JjNCvpF',
			until_date : 4,
			qts : 35,
		),
		$client->updateUserPhoto(
			user_id : -1592215077009980289,
			date : 93,
			photo : $client->userProfilePhotoEmpty(),
			previous : false,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7078743495889722888,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5702073031624564379,
			title : 'oGTHSqObEPRVhUdF',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 45,
			version : 34,
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
				until_date : 45,
			),
		),
		$client->chatForbidden(
			id : -5286048762401823338,
			title : 'fQTZJvYMkcem9P14',
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
			id : -2219263283276310670,
			access_hash : 7967138914824998791,
			title : 'fkym7AUr9uxJqCWX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'g8A4mTvzk16q3tnE',
					reason : 'GiRZxA8omD9wTQ3V',
					text : 'tFcSBkbKIp3Odxl9',
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
				until_date : 16,
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
				until_date : 16,
			),
			participants_count : 64,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -953757220506174359,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -4828303143555412448,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 65,
			subscription_until_date : 11,
			bot_verification_icon : 5125201213273047236,
			send_paid_messages_stars : -4610888529345606898,
			linked_monoforum_id : 3970315226731179029,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6122718042688014439,
			access_hash : -8694996603827952424,
			title : 'cSwNFJqk5LizZlRa',
			until_date : 22,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3019087607578826641,
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
			id : 8674711837019191479,
			access_hash : 1489540316539226146,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kCmavyjEsBIJ3GWP',
					reason : 'YI6OJhvrj1tNWq03',
					text : 'RvDW0ZLFIg28AocX',
				),
			),
			bot_inline_placeholder : 'c861E5aeuKBiqCnv',
			lang_code : '3RgpyDPkEOcdUZxz',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 33,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 3054964488324884532,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 3464141241357375107,
			),
			bot_active_users : 99,
			bot_verification_icon : 3562752604135645918,
			send_paid_messages_stars : -7374212522966955029,
		),
	),
);
```