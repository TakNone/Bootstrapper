# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 211

```tl
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | New messages from the encrypted event sequence |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>intermediate_state</mark> | [`updates.State`](type/updates.State) | Intermediary state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceSlice(
	new_messages : array(
		$client->messageEmpty(
			id : 73,
			peer_id : $client->peerUser(
				user_id : -1318634171998526873,
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
			id : 32,
			from_id : $client->peerUser(
				user_id : 3204558041681491002,
			),
			from_boosts_applied : 58,
			peer_id : $client->peerUser(
				user_id : -7049626621843757810,
			),
			saved_peer_id : $client->peerUser(
				user_id : 4221509210417405929,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'RiZmasStEg9J6q2d',
				date : 27,
				channel_post : 84,
				post_author : 'dVfR0EwAnNaxvQKC',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 24,
				saved_from_id : $client->peerUser(...),
				saved_from_name : '4GNg1VwDhHBEouRn',
				saved_date : 78,
				psa_type : 'uaywjrz8RtlIh93M',
			),
			via_bot_id : -5746312851893071847,
			via_business_bot_id : -4442926129046406753,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 40,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 16,
				quote_text : 'vnSXqdUc5e60Druf',
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
				quote_offset : 83,
				todo_item_id : 12,
			),
			date : 49,
			message : 'crOtCpDk5Y4UFsKn',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 85,
					length : 96,
				),
				$client->messageEntityMention(
					offset : 73,
					length : 24,
				),
				$client->messageEntityHashtag(
					offset : 35,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 57,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 48,
					length : 20,
				),
				$client->messageEntityEmail(
					offset : 37,
					length : 72,
				),
				$client->messageEntityBold(
					offset : 38,
					length : 65,
				),
				$client->messageEntityItalic(
					offset : 77,
					length : 58,
				),
				$client->messageEntityCode(
					offset : 86,
					length : 62,
				),
				$client->messageEntityPre(
					offset : 97,
					length : 81,
					language : 'm5QNp6lke2gYcIuZ',
				),
				$client->messageEntityTextUrl(
					offset : 23,
					length : 36,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 5,
					length : 9,
					user_id : -1287732681638624057,
				),
				$client->inputMessageEntityMentionName(
					offset : 22,
					length : 100,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 78,
					length : 92,
				),
				$client->messageEntityCashtag(
					offset : 56,
					length : 32,
				),
				$client->messageEntityUnderline(
					offset : 39,
					length : 76,
				),
				$client->messageEntityStrike(
					offset : 26,
					length : 40,
				),
				$client->messageEntityBankCard(
					offset : 49,
					length : 85,
				),
				$client->messageEntitySpoiler(
					offset : 68,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 63,
					length : 78,
					document_id : 3803647789798295954,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 45,
					length : 64,
				),
			),
			views : 37,
			forwards : 57,
			replies : $client->messageReplies(
				comments : true,
				replies : 47,
				replies_pts : 34,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : -6169230568072230935,
				max_id : 97,
				read_max_id : 77,
			),
			edit_date : 24,
			post_author : 'By5O9Rkq7iWFtYGQ',
			grouped_id : 7542310920195926824,
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
					platform : 'HPiWaNIR4b8JCyuL',
					reason : 'VlY5F2SjbynM6m4N',
					text : 'awgHWI6GcZJvQseO',
				),
			),
			ttl_period : 49,
			quick_reply_shortcut_id : 45,
			effect : -3620822513581458432,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'JTiH2ZfICQNoW4Lt',
				text : $client->textWithEntities(...),
				hash : 1016946226320000505,
			),
			report_delivery_until_date : 25,
			paid_message_stars : -1727487040252543386,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 72,
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
			id : 54,
			from_id : $client->peerUser(
				user_id : 400626263737335690,
			),
			peer_id : $client->peerUser(
				user_id : -7753672493346158096,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1454091659224840579,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 96,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 10,
				quote_text : 'UKdYRTxPW15M6nHC',
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
				quote_offset : 94,
				todo_item_id : 73,
			),
			date : 89,
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
			ttl_period : 26,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 5041032335492382968,
			chat_id : 6,
			date : 61,
			bytes : '?	ULiveProto??/*?',
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 35298707988369480,
			chat_id : 90,
			date : 68,
			bytes : 'se:k?LiveProto~?w?A',
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
			pts : 58,
			pts_count : 67,
		),
		$client->updateMessageID(
			id : 9,
			random_id : -1285904129821697794,
		),
		$client->updateDeleteMessages(
			messages : array(18),
			pts : 20,
			pts_count : 42,
		),
		$client->updateUserTyping(
			user_id : 7791122716450475167,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -1669058017437460231,
			from_id : $client->peerUser(
				user_id : -2932428181636280378,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -3486818636846996736,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -7874357069874259736,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 4552106373670382858,
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
			hash : 5270393674506920851,
			date : 89,
			device : 'phz4yqBlZAtuf1YH',
			location : '5sWuldSIek2xNKDR',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -5349770668845049735,
				chat_id : 33,
				date : 66,
				bytes : '?4ԇ~LiveProtol?\\s-',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 16,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 48,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 12,
			),
			date : 76,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 1,
			max_date : 51,
			date : 41,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5165447225217510849,
			user_id : -5279726297983952773,
			inviter_id : -2434190635558934561,
			date : 5,
			version : 65,
		),
		$client->updateChatParticipantDelete(
			chat_id : -3347561606839859573,
			user_id : -8741808469362827692,
			version : 10,
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
					id : 37,
					ip_address : '127.0.0.1',
					port : 76,
					secret : '<,"?LiveProto/_?0U',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 7,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 46,
			type : 'IngKP5L36XCStmbF',
			message : 'vtqPo90HgfjZVY32',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 24,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 48,
					length : 33,
				),
				$client->messageEntityHashtag(
					offset : 54,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 96,
					length : 60,
				),
				$client->messageEntityUrl(
					offset : 96,
					length : 0,
				),
				$client->messageEntityEmail(
					offset : 69,
					length : 78,
				),
				$client->messageEntityBold(
					offset : 17,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 22,
					length : 52,
				),
				$client->messageEntityCode(
					offset : 91,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 92,
					length : 33,
					language : 'qgh7J0ivcKuR6ELH',
				),
				$client->messageEntityTextUrl(
					offset : 94,
					length : 21,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 37,
					length : 61,
					user_id : -3404583754607754872,
				),
				$client->inputMessageEntityMentionName(
					offset : 1,
					length : 64,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 31,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 92,
					length : 91,
				),
				$client->messageEntityUnderline(
					offset : 14,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 1,
					length : 10,
				),
				$client->messageEntityBankCard(
					offset : 51,
					length : 82,
				),
				$client->messageEntitySpoiler(
					offset : 61,
					length : 99,
				),
				$client->messageEntityCustomEmoji(
					offset : 13,
					length : 5,
					document_id : -6686672489277235128,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 77,
					length : 28,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(97026030747891102),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1574123445682451128),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(7581934820503221522),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(6854506547729105869),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -2798061567583370584,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 10,
			peer : $client->peerUser(
				user_id : 3633159357627554359,
			),
			max_id : 70,
			still_unread_count : 60,
			pts : 79,
			pts_count : 15,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 881006625931631716,
			),
			max_id : 93,
			pts : 72,
			pts_count : 68,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5699253590764408016,
				url : 'https://docs.liveproto.dev',
			),
			pts : 37,
			pts_count : 53,
		),
		$client->updateReadMessagesContents(
			messages : array(47),
			pts : 99,
			pts_count : 53,
			date : 28,
		),
		$client->updateChannelTooLong(
			channel_id : -307138971995143436,
			pts : 49,
		),
		$client->updateChannel(
			channel_id : 2756727847121124870,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 10,
				peer_id : $client->peerUser(...),
			),
			pts : 38,
			pts_count : 99,
		),
		$client->updateReadChannelInbox(
			folder_id : 0,
			channel_id : -6770314803135528735,
			max_id : 19,
			still_unread_count : 69,
			pts : 26,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -772674841674383636,
			messages : array(16),
			pts : 74,
			pts_count : 20,
		),
		$client->updateChannelMessageViews(
			channel_id : -3230149360153763590,
			id : 41,
			views : 43,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5481819934862783474,
			user_id : -6461265095285712907,
			is_admin : true,
			version : 91,
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
			order : array(-86734794783767860),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8625677075615110084,
			user_id : -8587761203407232240,
			query : 'oF52cZnj3VYyQMrE',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'Bi01pzAeyO7Y4JMb',
		),
		$client->updateBotInlineSend(
			user_id : 4619374692835350321,
			query : 'wzFmBRYJ9qDoPOh5',
			geo : $client->geoPointEmpty(),
			id : 'sRVqD9td2TXKgk3x',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 63,
				id : 483573947149734091,
				access_hash : -1979743223035878840,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 96,
				peer_id : $client->peerUser(...),
			),
			pts : 16,
			pts_count : 40,
		),
		$client->updateBotCallbackQuery(
			query_id : -5238030811030506702,
			user_id : 6449913409247825007,
			peer : $client->peerUser(
				user_id : 1799531068943885700,
			),
			msg_id : 15,
			chat_instance : -2209171127600348136,
			data : '
??LiveProto??$%S',
			game_short_name : 'fkD82b4nGrolw73a',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(...),
			),
			pts : 48,
			pts_count : 14,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -1306360792368045413,
			user_id : 6318003737031214868,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 72,
				id : -4718592599510704381,
				access_hash : -230197203932696519,
			),
			chat_instance : 1957680302678643283,
			data : '?jނ0LiveProto??^?',
			game_short_name : '3IxCvjDPlfTGRWgq',
		),
		$client->updateReadChannelOutbox(
			channel_id : 1193030153586730565,
			max_id : 5,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 3705026652760998032,
			),
			top_msg_id : 34,
			saved_peer_id : $client->peerUser(
				user_id : -1615217312349570741,
			),
			draft : $client->draftMessageEmpty(
				date : 29,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -5904514214210071503,
			webpage : $client->webPageEmpty(
				id : 7185344209407294935,
				url : 'https://docs.liveproto.dev',
			),
			pts : 58,
			pts_count : 88,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 11,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 51,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 14,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'RLFwKoqtMODXY5Zr',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 659777175473946699,
			data : $client->dataJSON(
				data : 'HE0kUnP1txAbCecf',
			),
			timeout : 19,
		),
		$client->updateBotShippingQuery(
			query_id : -1395921336054470829,
			user_id : 4209538099582637709,
			payload : '?ش??LiveProto?u??',
			shipping_address : $client->postAddress(
				street_line1 : 'IKZq8XGWkaB6gTbv',
				street_line2 : '47CQO1iXcbED2aqy',
				city : '1ohwG6cUbMBCmQEX',
				state : 'pj2rBF1OuvQsx4cg',
				country_iso2 : 'B3t91VLbJwMPoOlE',
				post_code : 'oeY1sy8dUqVTu0O2',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5526031325407703400,
			user_id : 8853151821867373906,
			payload : '??U;?LiveProto??',
			info : $client->paymentRequestedInfo(
				name : 'ZxJX3F1qEfjI4ren',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'yNFfLYwh39Ss6zao',
			currency : 'bcDdaOm1gwhiMCB0',
			total_amount : 8346941318236654722,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -1180495168505906767,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'MBAXSYVlJeGjDa17',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '1tEMfmNkVj3Ibwsq',
				from_version : 4,
				version : 33,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 6922567855785980856,
			top_msg_id : 16,
			saved_peer_id : $client->peerUser(
				user_id : -3537451671325526826,
			),
			messages : array(40),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 8032373785658883196,
			available_min_id : 87,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -1560544156634325458,
			),
		),
		$client->updateMessagePoll(
			poll_id : 4844796766911792044,
			poll : $client->poll(
				id : -2761709077954864636,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 36,
				close_date : 12,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 50,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'ka0WxTizNX6dfKAR',
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
				user_id : 6773775068658840420,
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
				until_date : 63,
			),
			version : 93,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 22,
				),
			),
			pts : 37,
			pts_count : 78,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 3119949501958132424,
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
				geo_distance : 84,
				request_chat_title : 'KZphXqTV4BCeY9EO',
				request_chat_date : 18,
				business_bot_id : -6203220528158291970,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -8276210462556849318,
				registration_month : '6hpdwcDV1TYARgfo',
				phone_country : '+1234567890',
				name_change_date : 6,
				photo_change_date : 77,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 6,
					distance : 99,
				),
				$client->peerSelfLocated(
					expires : 30,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 3,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 8278299961362838376,
			),
			messages : array(90),
			sent_messages : array(38),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 1901384049204383586,
				access_hash : 7455757761733672886,
				slug : '3nQyjlWZ4S9aV7LI',
				title : '9BjpzbwmQ7t3l5Md',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'ZjQqUCmDM1i3FVOX',
				installs_count : 97,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 9203534532728352026,
			),
			msg_id : 24,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -1193619952139933484,
			peer : $client->peerUser(
				user_id : 7240295565622694634,
			),
			options : array('$?;-?LiveProtoqVʢ9'),
			qts : 17,
		),
		$client->updateDialogFilter(
			id : 76,
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
				id : 30,
				title : $client->textWithEntities(...),
				emoticon : 'JaiAnOHNWBKFPr9T',
				color : 8,
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
			order : array(83),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 2043420625138714965,
			data : 't????LiveProtob	c?',
		),
		$client->updateChannelMessageForwards(
			channel_id : -6256942121756940720,
			id : 51,
			forwards : 41,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -1859950723983399476,
			top_msg_id : 40,
			read_max_id : 30,
			broadcast_id : -5620143527812686529,
			broadcast_post : 52,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -221658567594935576,
			top_msg_id : 67,
			read_max_id : 82,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -7065016245818375324,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -8641303479037593094,
			top_msg_id : 74,
			from_id : $client->peerUser(
				user_id : 3797362762134018632,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -9046406282767180441,
			),
			messages : array(33),
			pts : 78,
			pts_count : 2,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -1784393207427052570,
			messages : array(22),
			pts : 19,
			pts_count : 17,
		),
		$client->updateChat(
			chat_id : 3444814000142452252,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 557230934106563998,
				access_hash : -370292457691273430,
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
					date : 16,
					active_date : 73,
					source : 92,
					volume : 21,
					about : 'PuhwUS0tHdOp9VzQ',
					raise_hand_rating : -7236206886403989877,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 38,
		),
		$client->updateGroupCall(
			chat_id : 6537526010907101180,
			call : $client->groupCallDiscarded(
				id : 6335188825902541470,
				access_hash : 6587426187945782121,
				duration : 26,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 6167067731827289797,
			),
			ttl_period : 39,
		),
		$client->updateChatParticipant(
			chat_id : -6471550901354917881,
			date : 59,
			actor_id : -2703103812975439467,
			user_id : -7910700530795641343,
			prev_participant : $client->chatParticipant(
				user_id : -3663529391420717269,
				inviter_id : -8860086471888684737,
				date : 99,
			),
			new_participant : $client->chatParticipant(
				user_id : -3047755013817267665,
				inviter_id : -6927725652220473610,
				date : 37,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '4nSaIGV6lK09w1Le',
				admin_id : -1623015730949455220,
				date : 92,
				start_date : 39,
				expire_date : 76,
				usage_limit : 79,
				usage : 39,
				requested : 57,
				subscription_expired : 75,
				title : 'hlvQYDiRadBxoA3k',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 11,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -3508810248464043324,
			date : 6,
			actor_id : -4398276211036207910,
			user_id : -4994206030471596022,
			prev_participant : $client->channelParticipant(
				user_id : 3870517197546677566,
				date : 76,
				subscription_until_date : 32,
			),
			new_participant : $client->channelParticipant(
				user_id : -5180194202090657212,
				date : 13,
				subscription_until_date : 82,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Xgk953LUAY24fRlB',
				admin_id : 718178037347846390,
				date : 27,
				start_date : 92,
				expire_date : 28,
				usage_limit : 100,
				usage : 53,
				requested : 85,
				subscription_expired : 24,
				title : 'YO1SGDoZPNyUsX5m',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 19,
		),
		$client->updateBotStopped(
			user_id : -2587071619381765123,
			date : 27,
			stopped : false,
			qts : 33,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : '76Olto5PrCEZKXik',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 6807231438999553341,
			),
			bot_id : -2127126497083968230,
			commands : array(
				$client->botCommand(
					command : 'bKe6c0iwFYJrI9ZR',
					description : 'ZoQgqRevUI9NVOi2',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -35938239420613064,
			),
			requests_pending : 89,
			recent_requesters : array(-3309204881548284937),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 3270386135722815851,
			),
			date : 94,
			user_id : -6024967342090880273,
			about : 'DYrTAJ5HOUCIeF6m',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Aq2fOzJmFR3SxTYP',
				admin_id : -5012241531680523504,
				date : 7,
				start_date : 76,
				expire_date : 9,
				usage_limit : 80,
				usage : 97,
				requested : 46,
				subscription_expired : 65,
				title : 'iHDg6ryv2o7AGIxP',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 34,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -8514373818497809481,
			),
			msg_id : 74,
			top_msg_id : 85,
			saved_peer_id : $client->peerUser(
				user_id : 5675785459790569688,
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
			query_id : -3773346141538746052,
		),
		$client->updateBotMenuButton(
			bot_id : -324063170624460155,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 5818770175589017749,
			),
			msg_id : 35,
			transcription_id : -3699623214128571420,
			text : 'APwBheWFufa4LJ3x',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -3371621757798191000,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 1489324443856833612,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 3962814708261468384,
			),
			msg_id : 70,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 57,
					h : 78,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 31,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -3523842163235444798,
			topic_id : 21,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 7558854908366960317,
			order : array(8),
		),
		$client->updateUser(
			user_id : 5114418245932421536,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -6113189170465738871,
			),
			story : $client->storyItemDeleted(
				id : 76,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 6145735915821612450,
			),
			max_id : 95,
		),
		$client->updateStoryID(
			id : 29,
			random_id : -1868432555306385538,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 14,
				cooldown_until_date : 42,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 7079265501932120017,
			),
			story_id : 32,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -7527836118311289398,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'XAKvzLI6gpm07Dry',
				user_id : 3470347646157783762,
				giveaway_msg_id : 21,
				date : 11,
				expires : 21,
				used_gift_slug : 'rGmwETPiDtOVLCKd',
				multiplier : 81,
				stars : -4510943257933174316,
			),
			qts : 64,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 6652592110510168313,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -9139774295519053468,
			),
			wallpaper : $client->wallPaper(
				id : -2692856028043237982,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -3950127155405627071,
				slug : 'oaHUBvZTqEX6rQwp',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -912644593318594910,
			),
			msg_id : 72,
			date : 18,
			actor : $client->peerUser(
				user_id : -5600539777453451009,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'yacOI3p9ltoLAX72',
				),
				$client->reactionCustomEmoji(
					document_id : 2090451579891241216,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'mIg569ux7Xny8Mza',
				),
				$client->reactionCustomEmoji(
					document_id : -5309883560313916853,
				),
				$client->reactionPaid(),
			),
			qts : 8,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 1874269937803610424,
			),
			msg_id : 95,
			date : 66,
			reactions : array(
				$client->reactionCount(
					chosen_order : 35,
					reaction : $client->reactionEmpty(...),
					count : 36,
				),
			),
			qts : 82,
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
					folder_id : 75,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 't54dHVc2p7Dr3Lhs',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 30,
					shortcut : 'ZTWK2DHexRhG3nqg',
					top_message : 92,
					count : 31,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 22,
				shortcut : 'RVr3PDqNdhATCYMJ',
				top_message : 14,
				count : 28,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 41,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 62,
			messages : array(79),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'ai0dEVjyM7Pp6qFB',
				user_id : 24625412245992916,
				dc_id : 87,
				date : 58,
				rights : $client->businessBotRights(...),
			),
			qts : 16,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'FakcGhCDAnNBxetO',
			message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 90,
				peer_id : $client->peerUser(...),
			),
			qts : 44,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'On0suIblBWoMT1re',
			message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(...),
			),
			qts : 7,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '2CWFcl8I4Q651dgS',
			peer : $client->peerUser(
				user_id : 2411284898123869862,
			),
			messages : array(52),
			qts : 75,
		),
		$client->updateNewStoryReaction(
			story_id : 83,
			peer : $client->peerUser(
				user_id : -8540906838506792238,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -7616113143107669555,
				nanos : 28,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -1255006004270075698,
			user_id : -4014398778744476687,
			connection_id : 'jvHLTFMN7cWJbmSu',
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -2080803514662674740,
			data : '?8??LiveProto}[???',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 7345014023999723592,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 67,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3846927971976546641,
			payload : '4SIbLHKPho2lZ9pV',
			qts : 66,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 59,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -7485525002226600978,
				access_hash : 5191967345770778962,
			),
			sub_chain_id : 75,
			blocks : array('?]T	LiveProto??*?F'),
			next_offset : 20,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -3691857019633506986,
			saved_peer_id : $client->peerUser(
				user_id : -1790642743546640315,
			),
			read_max_id : 88,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 7211963864879884109,
			saved_peer_id : $client->peerUser(
				user_id : 5683607611747955530,
			),
			read_max_id : 22,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 602319112831919781,
			saved_peer_id : $client->peerUser(
				user_id : 1966070209393888368,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2018416206950384318,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2336453583545556748,
			title : 'aE5ObvuopzMgRxf6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 59,
			date : 34,
			version : 92,
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
				until_date : 44,
			),
		),
		$client->chatForbidden(
			id : -6116195378982507959,
			title : 'F075cVyEzHkTqmx6',
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
			id : -5381814664556814067,
			access_hash : -1684087402217991432,
			title : 'rd4vmWMxwikVUanP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QsgwZ0b231GHTBoW',
					reason : 'RaiUz1X5Qpl9KneI',
					text : 'ImqtVsYBuT7Gl85a',
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
				until_date : 44,
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
				until_date : 3,
			),
			participants_count : 37,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 86,
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -3290981232664793715,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 1475683941096462914,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 41,
			subscription_until_date : 19,
			bot_verification_icon : -703182201089125904,
			send_paid_messages_stars : -8729025245989561127,
			linked_monoforum_id : -3251478556035504240,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1714918881790509496,
			access_hash : -6824938319927266798,
			title : '4GENjMoh168SxVRy',
			until_date : 14,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7521050241062466204,
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
			id : 2585541360429498585,
			access_hash : 8584223924101275475,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'el8BWsYygJfQHOCT',
					reason : 'nv9EVltN4zXiKfeP',
					text : 'yT9EF4sDmxbucqBk',
				),
			),
			bot_inline_placeholder : 'wZebrcKO7IBVE8fu',
			lang_code : 'UhW2C6NzcZpIKjFT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -2086312810227871304,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 2866296686627371936,
			),
			bot_active_users : 92,
			bot_verification_icon : 6777990614372687075,
			send_paid_messages_stars : -8091834580241876265,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 79,
		qts : 23,
		date : 32,
		seq : 12,
		unread_count : 37,
	),
);
```